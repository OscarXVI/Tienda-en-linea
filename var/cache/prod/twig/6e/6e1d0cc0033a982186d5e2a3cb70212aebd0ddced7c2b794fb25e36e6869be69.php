<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Module/Includes/modal_confirm.html.twig */
class __TwigTemplate_0075d729a904cccbf026ef930e19e626074079304a51c8d1cb5ae97bb78485c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "urls", [])) >= 1)) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "urls", []));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 27
                if (twig_in_filter($context["module_action"], [0 => "disable", 1 => "uninstall", 2 => "reset"])) {
                    // line 28
                    echo "      <div id=\"module-modal-confirm-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                    echo "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">";
                    // line 34
                    if (($context["module_action"] == "disable")) {
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable module?", [], "Admin.Modules.Feature"), "html", null, true);
                    }
                    // line 37
                    if (($context["module_action"] == "uninstall")) {
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall module?", [], "Admin.Modules.Feature"), "html", null, true);
                    }
                    // line 40
                    if (($context["module_action"] == "reset")) {
                        // line 41
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset module?", [], "Admin.Modules.Feature"), "html", null, true);
                    }
                    // line 43
                    echo "              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body row\">
              <div class=\"col-md-12\">
                <p>";
                    // line 51
                    if (($context["module_action"] == "disable")) {
                        // line 52
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to disable %moduleName% module.", ["%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", [])], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <br>";
                        // line 55
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your current settings will be saved, but the module will no longer be active.", [], "Admin.Modules.Notification"), "html", null, true);
                    }
                    // line 57
                    if (($context["module_action"] == "uninstall")) {
                        // line 58
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to uninstall %moduleName% module.", ["%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", [])], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "confirmUninstall", []), "html", null, true);
                        echo "
                    <br>
                    <br>";
                        // line 63
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will disable the module and delete all its files. For good.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <label>
                      <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional: delete module folder after uninstall.", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                    </label>
                    <br>
                    <span class=\"italic red\">";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    </span>";
                    }
                    // line 73
                    if (($context["module_action"] == "reset")) {
                        // line 74
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You're about to reset %moduleName% module.", ["%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "displayName", [])], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <br>";
                        // line 77
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will restore the defaults settings.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <span class=\"italic red\">";
                        // line 80
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    </span>";
                    }
                    // line 83
                    echo "                </p>
              </div>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    echo "\" />";
                    // line 88
                    if (($context["module_action"] == "disable")) {
                        // line 89
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 90
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 91
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 93
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
                        echo "\"
                >";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, disable it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>";
                    }
                    // line 98
                    if (($context["module_action"] == "uninstall")) {
                        // line 99
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 100
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 101
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 103
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
                        echo "\"
                >";
                        // line 105
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, uninstall it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>";
                    }
                    // line 108
                    if (($context["module_action"] == "reset")) {
                        // line 109
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 110
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 111
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 113
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "name", []), "html", null, true);
                        echo "\"
                >";
                        // line 115
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, reset it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>";
                    }
                    // line 118
                    echo "            </div>
          </div>
        </div>
      </div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 118,  203 => 115,  199 => 113,  194 => 111,  190 => 110,  187 => 109,  185 => 108,  180 => 105,  176 => 103,  171 => 101,  167 => 100,  164 => 99,  162 => 98,  157 => 95,  153 => 93,  148 => 91,  144 => 90,  141 => 89,  139 => 88,  136 => 87,  130 => 83,  125 => 80,  120 => 77,  115 => 74,  113 => 73,  108 => 70,  100 => 66,  94 => 63,  89 => 60,  85 => 58,  83 => 57,  80 => 55,  75 => 52,  73 => 51,  64 => 43,  61 => 41,  59 => 40,  56 => 38,  54 => 37,  51 => 35,  49 => 34,  38 => 28,  36 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "C:\\xampp\\htdocs\\tienda\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_confirm.html.twig");
    }
}