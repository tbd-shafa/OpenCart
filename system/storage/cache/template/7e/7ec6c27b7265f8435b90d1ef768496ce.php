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
                      <label for=\"iinput-custom-color\"\" class=\"col-sm-2 col-form-label\">";
                // line 129
                echo ($context["text_custom_color"] ?? null);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_color\" value=\"";
                // line 132
                echo ($context["custom_color"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_custom_color"] ?? null);
                echo "\" id=\"input-custom-color\" class=\"form-control\" />
                        </div>
                       
                      </div>
                    </div>
<fieldset>
    <legend>";
                // line 138
                echo ($context["text_custom_image"] ?? null);
                echo "</legend>
    <div class=\"row\">
        <div class=\"col-sm-4 col-md-3 mb-3\">
            <div id=\"custom-image\" class=\"card image\">
                <img src=\"";
                // line 142
                echo ($context["custom_thumb"] ?? null);
                echo "\" alt=\"\" title=\"\" id=\"thumb-custom-image\" data-oc-placeholder=\"";
                echo ($context["placeholder"] ?? null);
                echo "\" class=\"card-img-top\"/> 
                <input type=\"hidden\" name=\"custom_image\" value=\"";
                // line 143
                echo ($context["custom_image"] ?? null);
                echo "\" id=\"input-custom-image\"/>
                <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-custom-image\" data-oc-thumb=\"#thumb-custom-image\" class=\"btn btn-primary btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                // line 145
                echo ($context["button_edit"] ?? null);
                echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-custom-image\" data-oc-thumb=\"#thumb-custom-image\" class=\"btn btn-warning btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                // line 146
                echo ($context["button_clear"] ?? null);
                echo "</button>
                </div>
            </div>
        </div>
    </div>
</fieldset>

";
            }
            // line 154
            echo "                    
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 156);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 159
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 159)) : (""));
            echo "</textarea>
                          ";
            // line 160
            if (($context["master_id"] ?? null)) {
                // line 161
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163);
                echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 163)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 163)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-meta-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 163);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 167
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-";
            // line 171
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_tag"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 174
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 174);
            echo "][tag]\" value=\"";
            echo (((($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 174)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 174)] ?? null) : null), "tag", [], "any", false, false, false, 174)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 174);
            echo "\" class=\"form-control\"/>
                          ";
            // line 175
            if (($context["master_id"] ?? null)) {
                // line 176
                echo "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
                echo "][tag]\" value=\"1\" id=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
                echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
                echo "\" class=\"form-check-input\"";
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 178)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178)] ?? null) : null), "tag", [], "any", false, false, false, 178)) {
                    echo " checked";
                }
                echo "/> <label for=\"input-variant-tag-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 178);
                echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 182
            echo "                        </div>
                        <div class=\"form-text\">";
            // line 183
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
        // line 188
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 191
        echo ($context["master_id"] ?? null);
        echo "\"/>
              <fieldset>
                <legend>";
        // line 193
        echo ($context["text_model"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 195
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 198
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 199
        if (($context["master_id"] ?? null)) {
            // line 200
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 202
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 202)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 206
        echo "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 211
        echo ($context["entry_sku"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 214
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 215
        if (($context["master_id"] ?? null)) {
            // line 216
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"";
            // line 218
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sku", [], "any", false, false, false, 218)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 222
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 223
        echo ($context["help_sku"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 227
        echo ($context["entry_upc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 230
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 231
        if (($context["master_id"] ?? null)) {
            // line 232
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"";
            // line 234
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "upc", [], "any", false, false, false, 234)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 238
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 239
        echo ($context["help_upc"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 243
        echo ($context["entry_ean"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 246
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 247
        if (($context["master_id"] ?? null)) {
            // line 248
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"";
            // line 250
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "ean", [], "any", false, false, false, 250)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 254
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 255
        echo ($context["help_ean"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 259
        echo ($context["entry_jan"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 262
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 263
        if (($context["master_id"] ?? null)) {
            // line 264
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"";
            // line 266
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "jan", [], "any", false, false, false, 266)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 270
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 271
        echo ($context["help_jan"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 275
        echo ($context["entry_isbn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 278
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 279
        if (($context["master_id"] ?? null)) {
            // line 280
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"";
            // line 282
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [], "any", false, false, false, 282)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 286
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 287
        echo ($context["help_isbn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 291
        echo ($context["entry_mpn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 294
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 295
        if (($context["master_id"] ?? null)) {
            // line 296
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"";
            // line 298
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [], "any", false, false, false, 298)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 302
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 303
        echo ($context["help_mpn"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 307
        echo ($context["entry_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 310
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 311
        if (($context["master_id"] ?? null)) {
            // line 312
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 314
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 314)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 318
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 323
        echo ($context["text_price"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 325
        echo ($context["entry_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 328
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 329
        if (($context["master_id"] ?? null)) {
            // line 330
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 332
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 332)) {
                echo " checked";
            }
            echo "/>
                            <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 337
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 341
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 345
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 347
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 347);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 347) == ($context["tax_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 347);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                      </select>
                      ";
        // line 350
        if (($context["master_id"] ?? null)) {
            // line 351
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 353
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 353)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 357
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 362
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 364
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 366
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 370
        echo ($context["entry_minimum"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 373
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 374
        if (($context["master_id"] ?? null)) {
            // line 375
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 377
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 377)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 381
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 382
        echo ($context["help_minimum"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 386
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 390
        if (($context["subtract"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 392
        if (($context["master_id"] ?? null)) {
            // line 393
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 395
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 395)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 399
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 403
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 408
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 408);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 408) == ($context["stock_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 408);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 410
        echo "                      </select>
                      ";
        // line 411
        if (($context["master_id"] ?? null)) {
            // line 412
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 414
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 414)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 418
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 419
        echo ($context["help_stock_status"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 423
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"date_available\" value=\"";
        // line 426
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" id=\"input-date-available\" class=\"form-control date\"/>
                      <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                      ";
        // line 428
        if (($context["master_id"] ?? null)) {
            // line 429
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 431
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 431)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 435
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 440
        echo ($context["text_specification"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 442
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/>
                        <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 447
        if (($context["shipping"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 449
        if (($context["master_id"] ?? null)) {
            // line 450
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 452
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 452)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 456
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 460
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 463
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 464
        if (($context["master_id"] ?? null)) {
            // line 465
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 467
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 467)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 471
        echo "                      <input type=\"text\" name=\"width\" value=\"";
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 472
        if (($context["master_id"] ?? null)) {
            // line 473
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 475
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 475)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 479
        echo "                      <input type=\"text\" name=\"height\" value=\"";
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 480
        if (($context["master_id"] ?? null)) {
            // line 481
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 483
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 483)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 487
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 491
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 496
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 496);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 496) == ($context["length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 496);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "                      </select>
                      ";
        // line 499
        if (($context["master_id"] ?? null)) {
            // line 500
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 502
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 502)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 506
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 510
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 513
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 514
        if (($context["master_id"] ?? null)) {
            // line 515
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 517
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 517)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 521
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 525
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 529
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 530
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 530);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 530) == ($context["weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 530);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "                      </select>
                      ";
        // line 533
        if (($context["master_id"] ?? null)) {
            // line 534
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 536
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 536)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 540
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 544
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 548
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                      </div>
                      ";
        // line 550
        if (($context["master_id"] ?? null)) {
            // line 551
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 553
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 553)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 557
        echo "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 561
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 564
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 565
        if (($context["master_id"] ?? null)) {
            // line 566
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 568
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 568)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 572
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 579
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 582
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 583
        if (($context["master_id"] ?? null)) {
            // line 584
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 586
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 586)) {
                echo " checked";
            }
            echo "/>
                          <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 591
        echo "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 592
        echo ($context["manufacturer_id"] ?? null);
        echo "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 594
        echo ($context["help_manufacturer"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 598
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 600
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 607
            echo "                            <tr id=\"product-category-";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 607);
            echo "\">
                              <td>";
            // line 608
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 608);
            echo "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 608);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 612
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 615
        if (($context["master_id"] ?? null)) {
            // line 616
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 618
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 618)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 622
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 623
        echo ($context["help_category"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 627
        echo ($context["entry_filter"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 629
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 636
            echo "                            <tr id=\"product-filter-";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 636);
            echo "\">
                              <td>";
            // line 637
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 637);
            echo "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 637);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 641
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 644
        if (($context["master_id"] ?? null)) {
            // line 645
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 647
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 647)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 651
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 652
        echo ($context["help_filter"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 656
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 661
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 662
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 662);
            echo "\" id=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 662);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 662), ($context["product_store"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-store-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 662);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 662);
            echo "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 665
        echo "                    </div>
                    ";
        // line 666
        if (($context["master_id"] ?? null)) {
            // line 667
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 669
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 669)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 673
        echo "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 677
        echo ($context["entry_download"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 679
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 686
            echo "                            <tr id=\"product-download-";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 686);
            echo "\">
                              <td>";
            // line 687
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 687);
            echo "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 687);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 691
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 694
        if (($context["master_id"] ?? null)) {
            // line 695
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 697
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 697)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 701
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 702
        echo ($context["help_download"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 706
        echo ($context["entry_related"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 708
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 714
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 715
            echo "                            <tr id=\"product-related-";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 715);
            echo "\">
                              <td>";
            // line 716
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 716);
            echo "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 716);
            echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 723
        if (($context["master_id"] ?? null)) {
            // line 724
            echo "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 726
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 726)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 730
        echo "                  </div>
                  <div class=\"form-text\">";
        // line 731
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
        // line 740
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 741
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 743
        if (($context["master_id"] ?? null)) {
            // line 744
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 745
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 745)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 748
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 752
        $context["attribute_row"] = 0;
        // line 753
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 754
            echo "                      <tr id=\"attribute-row-";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-start\">
                          <input type=\"text\" name=\"product_attribute[";
            // line 756
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 756);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" id=\"input-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" data-oc-target=\"autocomplete-attribute-";
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 757
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 757);
            echo "\" id=\"input-attribute-id-";
            echo ($context["attribute_row"] ?? null);
            echo "\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 758
            echo ($context["attribute_row"] ?? null);
            echo "\" class=\"dropdown-menu\"></ul>
                        </td>
                        <td class=\"text-start\">
                          ";
            // line 761
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 762
                echo "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 763
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 763);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 763);
                echo "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 764
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 764);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" id=\"input-text-";
                echo ($context["attribute_row"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 764);
                echo "\" class=\"form-control\">";
                echo (((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 764)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 764)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 764)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 764)] ?? null) : null), "text", [], "any", false, false, false, 764)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 766
            echo "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 767
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 769
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 770
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 771
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 775
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 781
        if ( !($context["master_id"] ?? null)) {
            // line 782
            echo "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">
                  ";
            // line 785
            $context["option_row"] = 0;
            // line 786
            echo "                  ";
            $context["option_value_row"] = 0;
            // line 787
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 788
                echo "
                    <fieldset id=\"option-row-";
                // line 789
                echo ($context["option_row"] ?? null);
                echo "\">
                      <legend class=\"float-none\">";
                // line 790
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 790);
                echo " <button type=\"button\" class=\"btn btn-danger btn-sm float-end\" onclick=\"\$('#option-row-";
                echo ($context["option_row"] ?? null);
                echo "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button></legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 791
                echo ($context["option_row"] ?? null);
                echo "][product_option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 791);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 791);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 791);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 791);
                echo "\"/>

                      <div class=\"row mb-3\">
                        <label for=\"input-required-";
                // line 794
                echo ($context["option_row"] ?? null);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo ($context["entry_required"] ?? null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
                // line 796
                echo ($context["option_row"] ?? null);
                echo "][required]\" id=\"input-required-";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-select\">
                            <option value=\"1\"";
                // line 797
                if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 797)) {
                    echo " selected";
                }
                echo ">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                            <option value=\"0\"";
                // line 798
                if ( !twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 798)) {
                    echo " selected";
                }
                echo ">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                          </select>
                        </div>
                      </div>

                      ";
                // line 803
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 803) == "text")) {
                    // line 804
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 805
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_option[";
                    // line 807
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 807);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                      ";
                }
                // line 811
                echo "
                      ";
                // line 812
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 812) == "textarea")) {
                    // line 813
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 814
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_option[";
                    // line 816
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 816);
                    echo "</textarea>
                          </div>
                        </div>
                      ";
                }
                // line 820
                echo "
                      ";
                // line 821
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 821) == "file")) {
                    // line 822
                    echo "                        <div class=\"row mb-3 d-none\">
                          <label for=\"input-option-";
                    // line 823
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 824
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 824);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option-";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 827
                echo "
                      ";
                // line 828
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 828) == "date")) {
                    // line 829
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 830
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 833
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 833);
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
                // line 839
                echo "
                      ";
                // line 840
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 840) == "time")) {
                    // line 841
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 842
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 845
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 845);
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
                // line 851
                echo "
                      ";
                // line 852
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 852) == "datetime")) {
                    // line 853
                    echo "                        <div class=\"row mb-3\">
                          <label for=\"input-option-";
                    // line 854
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"product_option[";
                    // line 857
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 857);
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
                // line 863
                echo "
                      ";
                // line 864
                if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 864) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 864) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 864) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 864) == "image"))) {
                    // line 865
                    echo "                        <div class=\"table-responsive\">
                          <table class=\"table table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-start\">";
                    // line 869
                    echo ($context["entry_option_value"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 870
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                                <td class=\"text-start\">";
                    // line 871
                    echo ($context["entry_subtract"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 872
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 873
                    echo ($context["entry_points"] ?? null);
                    echo "</td>
                                <td class=\"text-end\">";
                    // line 874
                    echo ($context["entry_weight"] ?? null);
                    echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            <tbody id=\"option-value-";
                    // line 878
                    echo ($context["option_row"] ?? null);
                    echo "\">
                              ";
                    // line 879
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 879));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 880
                        echo "                                <tr id=\"option-value-row-";
                        echo ($context["option_value_row"] ?? null);
                        echo "\">
                                  <td class=\"text-start\">";
                        // line 881
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 881);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 882
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 882);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][product_option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 882);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 883
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 883);
                        echo " <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 883);
                        echo "\"/></td>
                                  <td class=\"text-start\">";
                        // line 884
                        if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 884)) {
                            // line 885
                            echo "                                      ";
                            echo ($context["text_yes"] ?? null);
                            echo "
                                    ";
                        } else {
                            // line 887
                            echo "                                      ";
                            echo ($context["text_no"] ?? null);
                            echo "
                                    ";
                        }
                        // line 889
                        echo "                                    <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][subtract]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 889);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 890
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 890);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 890);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 891
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 891);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 891);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 892
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 892);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 892);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 893
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 893);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 893);
                        echo "\"/></td>
                                  <td class=\"text-end\">";
                        // line 894
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 894);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 894);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 895
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 895);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 895);
                        echo "\"/></td>
                                  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 896
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
                        // line 898
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 899
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 900
                    echo "                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 904
                    echo ($context["button_option_value_add"] ?? null);
                    echo "\" data-option-row=\"";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                              </tr>
                            </tfoot>
                          </table>
                          <select id=\"product-option-values-";
                    // line 908
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"d-none\">
                            ";
                    // line 909
                    if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 909)] ?? null) : null)) {
                        // line 910
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 910)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 911
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 911);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 911);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 913
                        echo "                            ";
                    }
                    // line 914
                    echo "                          </select>
                        </div>
                      ";
                }
                // line 917
                echo "                    </fieldset>

                    ";
                // line 919
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 920
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 921
            echo "                </div>

                <fieldset>
                  <legend class=\"float-none\">";
            // line 924
            echo ($context["text_option_add"] ?? null);
            echo "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 926
            echo ($context["entry_option"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 928
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 930
            echo ($context["help_option"] ?? null);
            echo "</div>
                    </div>
                  </div>
                </fieldset>
              </div>

            ";
        } else {
            // line 937
            echo "
              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 939
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 940
                echo "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 941
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 941);
                echo "</legend>

                    ";
                // line 943
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 943) == "select")) {
                    // line 944
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 944)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 945
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 945);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 948
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 948);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 948);
                    echo "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 949
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 950
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 950));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 951
                        echo "                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 951);
                        echo "\"";
                        if (((($__internal_compile_22 = ($context["variant"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 951)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 951) == (($__internal_compile_23 = ($context["variant"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 951)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 951);
                        echo "
                                  ";
                        // line 952
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 952)) {
                            // line 953
                            echo "                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 953);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 953);
                            echo ")
                                  ";
                        }
                        // line 954
                        echo "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 956
                    echo "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 959
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 959);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 959);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 959);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 959)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 959)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 959);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 963
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 963);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 967
                echo "
                    ";
                // line 968
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 968) == "radio")) {
                    // line 969
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 969)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 970
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 970);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 973
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 973);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 974
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 974));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 975
                        echo "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 976
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 976);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 976);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 976);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_25 = ($context["variant"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 976)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 976) == (($__internal_compile_26 = ($context["variant"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 976)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 976);
                        echo "\" class=\"form-check-label\">
                                    ";
                        // line 977
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 977)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 977);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 977);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 977)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 977);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 977);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 978
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 978);
                        echo "
                                    ";
                        // line 979
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 979)) {
                            // line 980
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 980);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 980);
                            echo ")
                                    ";
                        }
                        // line 982
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 985
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 988
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 988)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 992
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 992);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 996
                echo "
                    ";
                // line 997
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 997) == "checkbox")) {
                    // line 998
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 998)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 999
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 999);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 1002
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1002);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1003
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 1003));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1004
                        echo "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 1005
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1005);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1005);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1005);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_28 = ($context["variant"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1005)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1005), (($__internal_compile_29 = ($context["variant"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1005)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 1005);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1005)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 1005);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1005);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1005)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1005);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1005);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1006
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 1006);
                        echo "
                                    ";
                        // line 1007
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1007)) {
                            // line 1008
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 1008);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 1008);
                            echo ")
                                    ";
                        }
                        // line 1010
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1013
                    echo "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1016
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1016)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1016);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1020
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1020);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1024
                echo "
                    ";
                // line 1025
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1025) == "text")) {
                    // line 1026
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1026)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1027
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1027);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1027);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1030
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_31 = ($context["variant"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030)] ?? null) : null)) ? ((($__internal_compile_32 = ($context["variant"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1030)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1030);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1030);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1033
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1033);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1033);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1033);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1033)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1033)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1033);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1037
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1037);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1041
                echo "
                    ";
                // line 1042
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1042) == "textarea")) {
                    // line 1043
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1043)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1044
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1044);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1044);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1047
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1047);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1047);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1047);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_34 = ($context["variant"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1047)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["variant"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1047)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1047)));
                    echo "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1050
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1050);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1050);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1050);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1050)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1050)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1050);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1054
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1054);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1058
                echo "
                    ";
                // line 1059
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1059) == "file")) {
                    // line 1060
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1060)) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1061
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1061);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1064
                    echo ($context["upload"] ?? null);
                    echo "\" id=\"button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1064);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1064);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1065
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1065);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_37 = ($context["variant"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1065)] ?? null) : null)) ? ((($__internal_compile_38 = ($context["variant"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1065)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1065)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1065);
                    echo "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1066
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1066);
                    echo "\"";
                    if ( !(($__internal_compile_39 = ($context["variant"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1066)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1067
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067);
                    echo "\"";
                    if ( !(($__internal_compile_40 = ($context["variant"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1070
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1070)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1070);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1074
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1074);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1078
                echo "
                    ";
                // line 1079
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1079) == "date")) {
                    // line 1080
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1080)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1081
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1081);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1081);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1084
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_42 = ($context["variant"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084)] ?? null) : null)) ? ((($__internal_compile_43 = ($context["variant"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1084)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1084);
                    echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1088
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1088)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1088);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1092
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1092);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1096
                echo "
                    ";
                // line 1097
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1097) == "time")) {
                    // line 1098
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1098)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1099
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1099);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1099);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1101
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1101);
                    echo "\" class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1102
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1102);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_45 = ($context["variant"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1102)] ?? null) : null)) ? ((($__internal_compile_46 = ($context["variant"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1102)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1102)));
                    echo "\" class=\"form-control time\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1106
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1106);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1106);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1106);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_47 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1106)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1106)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1106);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1110
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1110);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1114
                echo "
                    ";
                // line 1115
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1115) == "datetime")) {
                    // line 1116
                    echo "                      <div class=\"row mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1116)) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option-";
                    // line 1117
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1117);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1117);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1120
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1120);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_48 = ($context["variant"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1120)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["variant"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1120)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1120)));
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1120);
                    echo "\" class=\"form-control datetime\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1124
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1124);
                    echo "]\" value=\"1\" id=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1124);
                    echo "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1124);
                    echo "\" class=\"form-check-input\"";
                    if ((($__internal_compile_50 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1124)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1124)] ?? null) : null)) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-variant-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1124);
                    echo "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1128
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1128);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1132
                echo "
                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1135
            echo "              </div>
            ";
        }
        // line 1137
        echo "
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1143
        echo ($context["entry_subscription"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1144
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1145
        echo ($context["entry_trial_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1146
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td>
                        ";
        // line 1148
        if (($context["master_id"] ?? null)) {
            // line 1149
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1150
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1150)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1153
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1157
        $context["subscription_row"] = 0;
        // line 1158
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1159
            echo "                      <tr id=\"subscription-row-";
            echo ($context["subscription_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1160
            echo ($context["subscription_row"] ?? null);
            echo "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1162
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1162);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1162) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1162))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1162);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1164
            echo "                          </select></td>
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1165
            echo ($context["subscription_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1167
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1167);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1167) == twig_get_attribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1167))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1167);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1169
            echo "                          </select></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1170
            echo ($context["subscription_row"] ?? null);
            echo "][trial_price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1170);
            echo "\" placeholder=\"";
            echo ($context["entry_trial_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1171
            echo ($context["subscription_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1171);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1172
            echo ($context["subscription_row"] ?? null);
            echo "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1174
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1175
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1176
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1180
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
        // line 1192
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1193
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1194
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1195
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1196
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1197
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1198
        if (($context["master_id"] ?? null)) {
            // line 1199
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1200
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1200)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1202
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1206
        $context["discount_row"] = 0;
        // line 1207
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1208
            echo "                      <tr id=\"discount-row-";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_discount[";
            // line 1209
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1211
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1211);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1211) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1211))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1211);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1213
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1214
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1214);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1215
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1215);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1216
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1216);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1219
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1219);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1225
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1225);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1229
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1231
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1232
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1233
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1237
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
        // line 1249
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1250
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-end\">";
        // line 1251
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1252
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1253
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-center\">";
        // line 1254
        if (($context["master_id"] ?? null)) {
            // line 1255
            echo "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-oc-toggle=\"switch\" data-oc-target=\"#product-special\" class=\"form-check-input\"";
            // line 1256
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_special", [], "any", false, false, false, 1256)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-special\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1258
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1262
        $context["special_row"] = 0;
        // line 1263
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1264
            echo "                      <tr id=\"special-row-";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-start\"><select name=\"product_special[";
            // line 1265
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1267
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1267);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1267) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1267))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1267);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1269
            echo "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1270
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1270);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1271
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1271);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1274
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1274);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-start\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"product_special[";
            // line 1280
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1280);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control date\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                        </td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#special-row-";
            // line 1284
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1286
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1287
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1288
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-special\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1292
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
        // line 1302
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"row\">
                  <div class=\"col-sm-4 col-md-3 mb-3\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 1306
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                      <div class=\"card-body\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1308
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1309
        echo ($context["button_clear"] ?? null);
        echo "</button>

                        ";
        // line 1311
        if (($context["master_id"] ?? null)) {
            // line 1312
            echo "                          <div class=\"mx-auto w-25\">
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1314
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1314)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                            </div>
                          </div>
                        ";
        }
        // line 1318
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 1326
        echo ($context["text_image_additional"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1331
        echo ($context["entry_image"] ?? null);
        echo "</td>
                        <td class=\"text-start\">";
        // line 1332
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                        <td class=\"text-end\">

                          ";
        // line 1335
        if (($context["master_id"] ?? null)) {
            // line 1336
            echo "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1337
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1337)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1340
        echo "
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1345
        $context["image_row"] = 0;
        // line 1346
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1347
            echo "                        <tr id=\"product-image-row-";
            echo ($context["image_row"] ?? null);
            echo "\">
                          <td>
                            <div class=\"card image\">
                              <img src=\"";
            // line 1350
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1350);
            echo "\" alt=\"\" title=\"\" id=\"product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1350);
            echo "\" id=\"input-product-image-";
            echo ($context["image_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1352
            echo ($context["image_row"] ?? null);
            echo "\" data-oc-thumb=\"#product-image-";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1353
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
            // line 1357
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1357);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1358
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1360
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1361
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1362
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1366
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
        // line 1376
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1378
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1381
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1382
        if (($context["master_id"] ?? null)) {
            // line 1383
            echo "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1385
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1385)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1389
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 1390
        echo ($context["help_points"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1395
        echo ($context["text_points"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1400
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                        <td class=\"text-end\">";
        // line 1401
        echo ($context["entry_reward"] ?? null);
        echo "&nbsp;&nbsp;
                          ";
        // line 1402
        if (($context["master_id"] ?? null)) {
            // line 1403
            echo "                            <div class=\"form-check form-switch float-end\">
                              <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1404
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1404)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1407
        echo "                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1412
            echo "                        <tr>
                          <td class=\"text-start\">";
            // line 1413
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1413);
            echo "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1414
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1414);
            echo "][points]\" value=\"";
            echo (((($__internal_compile_51 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1414)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1414)] ?? null) : null), "points", [], "any", false, false, false, 1414)) : (""));
            echo "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1417
        echo "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1424
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1429
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1430
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1435
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1436
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1436);
            echo "</td>
                        <td class=\"text-start\">
                          ";
            // line 1438
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1439
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1440
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1440);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1440);
                echo "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1441
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1441);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1441);
                echo "]\" value=\"";
                if ((($__internal_compile_53 = (($__internal_compile_54 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1441)] ?? null) : null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1441)] ?? null) : null)) {
                    echo (($__internal_compile_55 = (($__internal_compile_56 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1441)] ?? null) : null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1441)] ?? null) : null);
                }
                echo "\" id=\"input-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1441);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1441);
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1443
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1443);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1443);
                echo "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1444
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1447
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
        // line 1456
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-start\">";
        // line 1457
        echo ($context["entry_layout"] ?? null);
        echo "
                        ";
        // line 1458
        if (($context["master_id"] ?? null)) {
            // line 1459
            echo "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1460
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1460)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1463
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1468
            echo "                      <tr>
                        <td class=\"text-start\">";
            // line 1469
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1469);
            echo "</td>
                        <td class=\"text-start\"><select name=\"product_layout[";
            // line 1470
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1470);
            echo "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1472
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1473
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1473);
                echo "\"";
                if (((($__internal_compile_57 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1473)] ?? null) : null) && ((($__internal_compile_58 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1473)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1473)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1473);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1475
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1478
        echo "                  </tbody>
                </table>

              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1485
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 1486
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1490
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
        // line 1498
        echo ($context["ckeditor"] ?? null);
        echo "'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1505
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1510
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
        // line 1532
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
        // line 1566
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
        // line 1600
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
        // line 1634
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
        // line 1668
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
        // line 1688
        echo ($context["attribute_row"] ?? null);
        echo ";

\$('#product-attribute tr').each(function (index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function () {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td class=\"text-start\">';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1697
        echo twig_escape_filter($this->env, ($context["entry_attribute"] ?? null), "js");
        echo "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td class=\"text-start\">';
  ";
        // line 1702
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1703
            echo "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1704
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1704);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1704), "js");
            echo "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1705
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1705);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["entry_text"] ?? null), "js");
            echo "\" id=\"input-text-' + attribute_row + '-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1705);
            echo "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1708
        echo "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1709
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1719
        if ( !($context["master_id"] ?? null)) {
            // line 1720
            echo "var option_row = ";
            echo ($context["option_row"] ?? null);
            echo ";

\$('#input-option').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1725
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
            // line 1749
            echo twig_escape_filter($this->env, ($context["entry_required"] ?? null), "js");
            echo "</label>';
        html += '\t   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t     <option value=\"1\">";
            // line 1751
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '\t     <option value=\"0\">";
            // line 1752
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
        html += '\t </select></div>';
        html += '  </div>';

        if (item['type'] == 'text') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1758
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1759
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'textarea') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1765
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1766
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'file') {
            html += '\t<div class=\"row mb-3 d-none\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1772
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 d-none\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1773
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'date') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1779
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1780
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'time') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1786
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1787
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "\" id=\"input-option-' + option_row + '\" class=\"form-control time\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></div>';
            html += '\t</div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t<div class=\"row mb-3\">';
            html += '\t  <label for=\"input-option-' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 1793
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</label>';
            html += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1794
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
            // line 1803
            echo twig_escape_filter($this->env, ($context["entry_option_value"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1804
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-start\">";
            // line 1805
            echo twig_escape_filter($this->env, ($context["entry_subtract"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1806
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1807
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "</td>';
            html += '        <td class=\"text-end\">";
            // line 1808
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
            // line 1816
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
            // line 1838
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
            // line 1855
            echo twig_escape_filter($this->env, ($context["text_option_value"] ?? null), "js");
            echo "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1859
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
            // line 1877
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1878
            echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
            echo "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1882
            echo twig_escape_filter($this->env, ($context["entry_subtract"] ?? null), "js");
            echo "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 1886
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '      \t <option value=\"0\">";
            // line 1887
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1889
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 1890
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1897
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
            // line 1914
            echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
            echo "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1919
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
            // line 1936
            echo twig_escape_filter($this->env, ($context["entry_points"] ?? null), "js");
            echo "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1941
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
            // line 1958
            echo twig_escape_filter($this->env, ($context["entry_weight"] ?? null), "js");
            echo "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';

    html += '      </div>';

    html += '      <div class=\"modal-footer\">';
    html += '\t     <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1965
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
            // line 1979
            echo twig_escape_filter($this->env, ($context["text_yes"] ?? null), "js");
            echo "' : '";
            echo twig_escape_filter($this->env, ($context["text_no"] ?? null), "js");
            echo "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1983
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
        // line 1998
        echo "
var discount_row = ";
        // line 1999
        echo ($context["discount_row"] ?? null);
        echo ";

\$('#button-discount').on('click', function () {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2004
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2005
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2005);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2005), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2007
        echo "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2008
        echo twig_escape_filter($this->env, ($context["entry_quantity"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2009
        echo twig_escape_filter($this->env, ($context["entry_priority"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2010
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2011
        echo twig_escape_filter($this->env, ($context["entry_date_start"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2012
        echo twig_escape_filter($this->env, ($context["entry_date_end"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2013
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var special_row = ";
        // line 2021
        echo ($context["special_row"] ?? null);
        echo ";

\$('#button-special').on('click', function () {
    html = '<tr id=\"special-row-' + special_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2026
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2027
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2027);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2027), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2029
        echo "    html += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2030
        echo twig_escape_filter($this->env, ($context["entry_priority"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2031
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2032
        echo twig_escape_filter($this->env, ($context["entry_date_start"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-start\"><div class=\"input-group\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2033
        echo twig_escape_filter($this->env, ($context["entry_date_end"] ?? null), "js");
        echo "\" class=\"form-control date\"/><div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div></div></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#special-row-' + special_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2034
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-special tbody').append(html);

    special_row++;
});

var image_row = ";
        // line 2042
        echo ($context["image_row"] ?? null);
        echo ";

\$('#button-image').on('click', function () {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"card image\">';
    html += '    <img src=\"";
        // line 2047
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "js");
        echo "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "js");
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"card-body\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 2049
        echo twig_escape_filter($this->env, ($context["button_edit"] ?? null), "js");
        echo "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 2050
        echo twig_escape_filter($this->env, ($context["button_clear"] ?? null), "js");
        echo "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2053
        echo twig_escape_filter($this->env, ($context["entry_sort_order"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2054
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 2062
        echo ($context["subscription_row"] ?? null);
        echo ";

\$('#button-subscription').on('click', function () {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 2067
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 2068
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 2068);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 2068), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2070
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 2072
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2073
            echo "    html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2073);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2073), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2075
        echo "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 2076
        echo twig_escape_filter($this->env, ($context["entry_trial_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 2077
        echo twig_escape_filter($this->env, ($context["entry_price"] ?? null), "js");
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2078
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 2086
        if (($context["master_id"] ?? null)) {
            // line 2087
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
        // line 2153
        echo "
\$('#report').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 2160
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
        return array (  5186 => 2160,  5177 => 2153,  5109 => 2087,  5107 => 2086,  5096 => 2078,  5092 => 2077,  5088 => 2076,  5085 => 2075,  5074 => 2073,  5070 => 2072,  5066 => 2070,  5055 => 2068,  5051 => 2067,  5043 => 2062,  5032 => 2054,  5028 => 2053,  5022 => 2050,  5018 => 2049,  5011 => 2047,  5003 => 2042,  4992 => 2034,  4988 => 2033,  4984 => 2032,  4980 => 2031,  4976 => 2030,  4973 => 2029,  4962 => 2027,  4958 => 2026,  4950 => 2021,  4939 => 2013,  4935 => 2012,  4931 => 2011,  4927 => 2010,  4923 => 2009,  4919 => 2008,  4916 => 2007,  4905 => 2005,  4901 => 2004,  4893 => 1999,  4890 => 1998,  4870 => 1983,  4861 => 1979,  4842 => 1965,  4832 => 1958,  4812 => 1941,  4804 => 1936,  4784 => 1919,  4776 => 1914,  4756 => 1897,  4746 => 1890,  4742 => 1889,  4737 => 1887,  4733 => 1886,  4726 => 1882,  4719 => 1878,  4715 => 1877,  4694 => 1859,  4687 => 1855,  4667 => 1838,  4642 => 1816,  4631 => 1808,  4627 => 1807,  4623 => 1806,  4619 => 1805,  4615 => 1804,  4611 => 1803,  4599 => 1794,  4595 => 1793,  4586 => 1787,  4582 => 1786,  4573 => 1780,  4569 => 1779,  4560 => 1773,  4556 => 1772,  4547 => 1766,  4543 => 1765,  4534 => 1759,  4530 => 1758,  4521 => 1752,  4517 => 1751,  4512 => 1749,  4485 => 1725,  4476 => 1720,  4474 => 1719,  4461 => 1709,  4458 => 1708,  4445 => 1705,  4439 => 1704,  4436 => 1703,  4432 => 1702,  4424 => 1697,  4412 => 1688,  4389 => 1668,  4352 => 1634,  4315 => 1600,  4278 => 1566,  4241 => 1532,  4216 => 1510,  4208 => 1505,  4198 => 1498,  4187 => 1490,  4180 => 1486,  4176 => 1485,  4167 => 1478,  4159 => 1475,  4144 => 1473,  4140 => 1472,  4135 => 1470,  4131 => 1469,  4128 => 1468,  4124 => 1467,  4118 => 1463,  4110 => 1460,  4107 => 1459,  4105 => 1458,  4101 => 1457,  4097 => 1456,  4086 => 1447,  4078 => 1444,  4068 => 1443,  4051 => 1441,  4045 => 1440,  4042 => 1439,  4038 => 1438,  4033 => 1436,  4030 => 1435,  4026 => 1434,  4019 => 1430,  4015 => 1429,  4007 => 1424,  3998 => 1417,  3987 => 1414,  3983 => 1413,  3980 => 1412,  3976 => 1411,  3970 => 1407,  3962 => 1404,  3959 => 1403,  3957 => 1402,  3953 => 1401,  3949 => 1400,  3941 => 1395,  3933 => 1390,  3930 => 1389,  3921 => 1385,  3917 => 1383,  3915 => 1382,  3909 => 1381,  3903 => 1378,  3898 => 1376,  3885 => 1366,  3879 => 1362,  3873 => 1361,  3871 => 1360,  3864 => 1358,  3856 => 1357,  3845 => 1353,  3837 => 1352,  3822 => 1350,  3815 => 1347,  3810 => 1346,  3808 => 1345,  3801 => 1340,  3793 => 1337,  3790 => 1336,  3788 => 1335,  3782 => 1332,  3778 => 1331,  3770 => 1326,  3760 => 1318,  3751 => 1314,  3747 => 1312,  3745 => 1311,  3740 => 1309,  3736 => 1308,  3727 => 1306,  3720 => 1302,  3707 => 1292,  3701 => 1288,  3695 => 1287,  3693 => 1286,  3686 => 1284,  3675 => 1280,  3662 => 1274,  3652 => 1271,  3644 => 1270,  3641 => 1269,  3626 => 1267,  3622 => 1266,  3618 => 1265,  3613 => 1264,  3608 => 1263,  3606 => 1262,  3600 => 1258,  3592 => 1256,  3589 => 1255,  3587 => 1254,  3583 => 1253,  3579 => 1252,  3575 => 1251,  3571 => 1250,  3567 => 1249,  3552 => 1237,  3546 => 1233,  3540 => 1232,  3538 => 1231,  3531 => 1229,  3520 => 1225,  3507 => 1219,  3497 => 1216,  3489 => 1215,  3481 => 1214,  3478 => 1213,  3463 => 1211,  3459 => 1210,  3455 => 1209,  3450 => 1208,  3445 => 1207,  3443 => 1206,  3437 => 1202,  3429 => 1200,  3426 => 1199,  3424 => 1198,  3420 => 1197,  3416 => 1196,  3412 => 1195,  3408 => 1194,  3404 => 1193,  3400 => 1192,  3385 => 1180,  3379 => 1176,  3373 => 1175,  3371 => 1174,  3364 => 1172,  3356 => 1171,  3348 => 1170,  3345 => 1169,  3330 => 1167,  3326 => 1166,  3322 => 1165,  3319 => 1164,  3304 => 1162,  3300 => 1161,  3296 => 1160,  3291 => 1159,  3286 => 1158,  3284 => 1157,  3278 => 1153,  3270 => 1150,  3267 => 1149,  3265 => 1148,  3260 => 1146,  3256 => 1145,  3252 => 1144,  3248 => 1143,  3240 => 1137,  3236 => 1135,  3228 => 1132,  3221 => 1128,  3204 => 1124,  3193 => 1120,  3185 => 1117,  3178 => 1116,  3176 => 1115,  3173 => 1114,  3166 => 1110,  3149 => 1106,  3140 => 1102,  3136 => 1101,  3129 => 1099,  3122 => 1098,  3120 => 1097,  3117 => 1096,  3110 => 1092,  3093 => 1088,  3082 => 1084,  3074 => 1081,  3067 => 1080,  3065 => 1079,  3062 => 1078,  3055 => 1074,  3038 => 1070,  3026 => 1067,  3016 => 1066,  3008 => 1065,  2994 => 1064,  2988 => 1061,  2981 => 1060,  2979 => 1059,  2976 => 1058,  2969 => 1054,  2952 => 1050,  2940 => 1047,  2932 => 1044,  2925 => 1043,  2923 => 1042,  2920 => 1041,  2913 => 1037,  2896 => 1033,  2884 => 1030,  2876 => 1027,  2869 => 1026,  2867 => 1025,  2864 => 1024,  2857 => 1020,  2840 => 1016,  2835 => 1013,  2827 => 1010,  2820 => 1008,  2818 => 1007,  2813 => 1006,  2785 => 1005,  2782 => 1004,  2778 => 1003,  2774 => 1002,  2768 => 999,  2761 => 998,  2759 => 997,  2756 => 996,  2749 => 992,  2732 => 988,  2727 => 985,  2719 => 982,  2712 => 980,  2710 => 979,  2705 => 978,  2689 => 977,  2675 => 976,  2672 => 975,  2668 => 974,  2664 => 973,  2658 => 970,  2651 => 969,  2649 => 968,  2646 => 967,  2639 => 963,  2622 => 959,  2617 => 956,  2610 => 954,  2603 => 953,  2601 => 952,  2590 => 951,  2586 => 950,  2582 => 949,  2576 => 948,  2570 => 945,  2563 => 944,  2561 => 943,  2556 => 941,  2553 => 940,  2549 => 939,  2545 => 937,  2535 => 930,  2530 => 928,  2525 => 926,  2520 => 924,  2515 => 921,  2509 => 920,  2507 => 919,  2503 => 917,  2498 => 914,  2495 => 913,  2484 => 911,  2479 => 910,  2477 => 909,  2473 => 908,  2464 => 904,  2458 => 900,  2452 => 899,  2450 => 898,  2437 => 896,  2423 => 895,  2418 => 894,  2404 => 893,  2399 => 892,  2385 => 891,  2380 => 890,  2371 => 889,  2365 => 887,  2359 => 885,  2357 => 884,  2347 => 883,  2333 => 882,  2329 => 881,  2324 => 880,  2320 => 879,  2316 => 878,  2309 => 874,  2305 => 873,  2301 => 872,  2297 => 871,  2293 => 870,  2289 => 869,  2283 => 865,  2281 => 864,  2278 => 863,  2263 => 857,  2255 => 854,  2252 => 853,  2250 => 852,  2247 => 851,  2232 => 845,  2224 => 842,  2221 => 841,  2219 => 840,  2216 => 839,  2201 => 833,  2193 => 830,  2190 => 829,  2188 => 828,  2185 => 827,  2173 => 824,  2167 => 823,  2164 => 822,  2162 => 821,  2159 => 820,  2146 => 816,  2139 => 814,  2136 => 813,  2134 => 812,  2131 => 811,  2118 => 807,  2111 => 805,  2108 => 804,  2106 => 803,  2094 => 798,  2086 => 797,  2080 => 796,  2073 => 794,  2053 => 791,  2047 => 790,  2043 => 789,  2040 => 788,  2035 => 787,  2032 => 786,  2030 => 785,  2025 => 782,  2023 => 781,  2014 => 775,  2008 => 771,  2002 => 770,  2000 => 769,  1993 => 767,  1990 => 766,  1971 => 764,  1965 => 763,  1962 => 762,  1958 => 761,  1952 => 758,  1944 => 757,  1932 => 756,  1926 => 754,  1921 => 753,  1919 => 752,  1913 => 748,  1905 => 745,  1902 => 744,  1900 => 743,  1895 => 741,  1891 => 740,  1879 => 731,  1876 => 730,  1867 => 726,  1863 => 724,  1861 => 723,  1856 => 720,  1844 => 716,  1839 => 715,  1835 => 714,  1826 => 708,  1821 => 706,  1814 => 702,  1811 => 701,  1802 => 697,  1798 => 695,  1796 => 694,  1791 => 691,  1779 => 687,  1774 => 686,  1770 => 685,  1761 => 679,  1756 => 677,  1750 => 673,  1741 => 669,  1737 => 667,  1735 => 666,  1732 => 665,  1713 => 662,  1710 => 661,  1706 => 660,  1699 => 656,  1692 => 652,  1689 => 651,  1680 => 647,  1676 => 645,  1674 => 644,  1669 => 641,  1657 => 637,  1652 => 636,  1648 => 635,  1639 => 629,  1634 => 627,  1627 => 623,  1624 => 622,  1615 => 618,  1611 => 616,  1609 => 615,  1604 => 612,  1592 => 608,  1587 => 607,  1583 => 606,  1574 => 600,  1569 => 598,  1562 => 594,  1557 => 592,  1554 => 591,  1544 => 586,  1540 => 584,  1538 => 583,  1532 => 582,  1526 => 579,  1517 => 572,  1508 => 568,  1504 => 566,  1502 => 565,  1496 => 564,  1490 => 561,  1484 => 557,  1475 => 553,  1471 => 551,  1469 => 550,  1462 => 548,  1455 => 544,  1449 => 540,  1440 => 536,  1436 => 534,  1434 => 533,  1431 => 532,  1416 => 530,  1412 => 529,  1405 => 525,  1399 => 521,  1390 => 517,  1386 => 515,  1384 => 514,  1378 => 513,  1372 => 510,  1366 => 506,  1357 => 502,  1353 => 500,  1351 => 499,  1348 => 498,  1333 => 496,  1329 => 495,  1322 => 491,  1316 => 487,  1307 => 483,  1303 => 481,  1301 => 480,  1294 => 479,  1285 => 475,  1281 => 473,  1279 => 472,  1272 => 471,  1263 => 467,  1259 => 465,  1257 => 464,  1251 => 463,  1245 => 460,  1239 => 456,  1230 => 452,  1226 => 450,  1224 => 449,  1217 => 447,  1209 => 442,  1204 => 440,  1197 => 435,  1188 => 431,  1184 => 429,  1182 => 428,  1175 => 426,  1169 => 423,  1162 => 419,  1159 => 418,  1150 => 414,  1146 => 412,  1144 => 411,  1141 => 410,  1126 => 408,  1122 => 407,  1115 => 403,  1109 => 399,  1100 => 395,  1096 => 393,  1094 => 392,  1087 => 390,  1080 => 386,  1073 => 382,  1070 => 381,  1061 => 377,  1057 => 375,  1055 => 374,  1049 => 373,  1043 => 370,  1034 => 366,  1029 => 364,  1024 => 362,  1017 => 357,  1008 => 353,  1004 => 351,  1002 => 350,  999 => 349,  984 => 347,  980 => 346,  976 => 345,  969 => 341,  963 => 337,  953 => 332,  949 => 330,  947 => 329,  941 => 328,  935 => 325,  930 => 323,  923 => 318,  914 => 314,  910 => 312,  908 => 311,  902 => 310,  896 => 307,  889 => 303,  886 => 302,  877 => 298,  873 => 296,  871 => 295,  865 => 294,  859 => 291,  852 => 287,  849 => 286,  840 => 282,  836 => 280,  834 => 279,  828 => 278,  822 => 275,  815 => 271,  812 => 270,  803 => 266,  799 => 264,  797 => 263,  791 => 262,  785 => 259,  778 => 255,  775 => 254,  766 => 250,  762 => 248,  760 => 247,  754 => 246,  748 => 243,  741 => 239,  738 => 238,  729 => 234,  725 => 232,  723 => 231,  717 => 230,  711 => 227,  704 => 223,  701 => 222,  692 => 218,  688 => 216,  686 => 215,  680 => 214,  674 => 211,  667 => 206,  658 => 202,  654 => 200,  652 => 199,  646 => 198,  640 => 195,  635 => 193,  630 => 191,  625 => 188,  606 => 183,  603 => 182,  586 => 178,  582 => 176,  580 => 175,  570 => 174,  562 => 171,  556 => 167,  539 => 163,  535 => 161,  533 => 160,  523 => 159,  515 => 156,  511 => 154,  500 => 146,  496 => 145,  491 => 143,  485 => 142,  478 => 138,  467 => 132,  461 => 129,  449 => 122,  443 => 119,  437 => 116,  431 => 112,  414 => 108,  410 => 106,  408 => 105,  398 => 104,  390 => 101,  383 => 97,  380 => 96,  363 => 92,  359 => 90,  357 => 89,  347 => 88,  339 => 85,  333 => 81,  316 => 77,  312 => 75,  310 => 74,  297 => 72,  288 => 68,  281 => 64,  278 => 63,  271 => 59,  259 => 58,  255 => 56,  253 => 55,  243 => 54,  235 => 51,  225 => 49,  208 => 48,  204 => 46,  177 => 44,  160 => 43,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  93 => 21,  90 => 20,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/product_form.twig", "/opt/lampp/htdocs/opencart3/admin/view/template/catalog/product_form.twig");
    }
}
