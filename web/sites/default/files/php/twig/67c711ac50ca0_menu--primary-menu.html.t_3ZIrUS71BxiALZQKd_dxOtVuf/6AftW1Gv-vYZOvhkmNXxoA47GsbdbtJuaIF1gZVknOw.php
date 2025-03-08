<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/zeropoint/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_bed09cbe9085ed839c4976fec5fd54bf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "<div class=\"menu-wrapper\">
  <a href=\"#\" id=\"toggles\" class=\"menu-toggle\">
    <s class=\"bars\"></s>
    <s class=\"bars\"></s>
    <div class=\"element-invisible\">toggle</div>
  </a>
<div class=\"pure-menu pure-menu-horizontal menu-transform\">
";
        // line 30
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 35
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 35);
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 36, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "
";
        // line 143
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level", "loop"]);        yield from [];
    }

    // line 37
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "  ";
            $context["primary_nav_level"] = ("primary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 39
            yield "  ";
            $context["selector_primary_nav_level"] = ("primary-nav-menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 40
            yield "  ";
            $macros["menus"] = $this;
            // line 41
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 42
                yield "    ";
                // line 46
                yield "    ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 47
                    yield "      <span data-selector=\"primary-nav-menu-🥕\" class=\"primary-nav__menu-🥕\"></span>
    ";
                }
                // line 49
                yield "    ";
                // line 50
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 51
                    yield "    ";
                    $context["navul_classes"] = ["pure-menu-list"];
                    // line 52
                    yield "    ";
                } else {
                    // line 53
                    yield "    ";
                    $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["pure-menu-list"], "method", false, false, true, 53);
                    // line 54
                    yield "    ";
                    $context["navul_classes"] = ["pure-menu-children"];
                    // line 55
                    yield "    ";
                }
                // line 56
                yield "    <ul ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["primary-nav__menu", ($context["navul_classes"] ?? null), ($context["primary_nav_level"] ?? null)], "method", false, false, true, 56), "setAttribute", ["data-selector", ($context["selector_primary_nav_level"] ?? null)], "method", false, false, true, 56), "html", null, true);
                yield ">
      ";
                // line 57
                $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["primary_nav_level"] ?? null)], "method", false, false, true, 57);
                // line 58
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 59
                    yield "        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), "isRouted", [], "any", false, false, true, 59) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), "routeName", [], "any", false, false, true, 59) == "<nolink>"))) {
                        // line 60
                        yield "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 61
                        yield "        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "isRouted", [], "any", false, false, true, 61) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "routeName", [], "any", false, false, true, 61) == "<button>"))) {
                        // line 62
                        yield "          ";
                        $context["menu_item_type"] = "button";
                        // line 63
                        yield "        ";
                    } else {
                        // line 64
                        yield "          ";
                        $context["menu_item_type"] = "link";
                        // line 65
                        yield "        ";
                    }
                    // line 66
                    yield "        ";
                    $context["item_classes"] = ["pure-menu-item", "primary-nav__menu-item", ("primary-nav__menu-item--" .                     // line 69
($context["menu_item_type"] ?? null)), ("primary-nav__menu-item--level-" . (                    // line 70
($context["menu_level"] ?? null) + 1)), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 71
$context["item"], "is_expanded", [], "any", false, false, true, 71) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71))) ? ("pure-menu-has-children pure-menu-allow-hover primary-nav__menu-item--has-children") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 72
$context["item"], "is_expanded", [], "any", false, false, true, 72)) ? ("expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 73
$context["item"], "is_collapsed", [], "any", false, false, true, 73)) ? ("collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 74
$context["item"], "in_active_trail", [], "any", false, false, true, 74)) ? ("active") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 75
$context["loop"], "first", [], "any", false, false, true, 75)) ? ("first") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 76
$context["loop"], "last", [], "any", false, false, true, 76)) ? ("last") : (""))];
                    // line 79
                    yield "        ";
                    $context["link_classes"] = ["pure-menu-link", "primary-nav__menu-link", ("primary-nav__menu-link--" .                     // line 82
($context["menu_item_type"] ?? null)), ("primary-nav__menu-link--level-" . (                    // line 83
($context["menu_level"] ?? null) + 1)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 84
$context["item"], "in_active_trail", [], "any", false, false, true, 84)) ? ("primary-nav__menu-link--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 85
$context["item"], "below", [], "any", false, false, true, 85)) ? ("primary-nav__menu-link--has-children") : (""))];
                    // line 88
                    yield "        <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 88), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 88), "setAttribute", ["data-selector", ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 88)) ? ("primary-nav-menu-item-has-children") : (false))], "method", false, false, true, 88), "html", null, true);
                    yield ">
          ";
                    // line 94
                    yield "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 94) . "-submenu-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 94)));
                    // line 95
                    yield "          ";
                    $context["link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 96
                        yield "            <span class=\"primary-nav__menu-link-inner\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 96), "html", null, true);
                        yield "</span>
          ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 98
                    yield "          ";
                    if (((($context["menu_item_type"] ?? null) == "link") || (($context["menu_item_type"] ?? null) == "nolink"))) {
                        // line 99
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink((((($context["menu_item_type"] ?? null) == "link")) ? (($context["link_title"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 99))), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 99), ["class" =>                         // line 100
($context["link_classes"] ?? null), "data-selector" => "primary-nav-menu-link-has-children"]), "html", null, true);
                        // line 103
                        yield "
            ";
                        // line 104
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 104)) {
                            // line 105
                            yield "              ";
                            // line 110
                            yield "              ";
                            // line 111
                            $context["toggle_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => "primary-nav__button-toggle", "data-selector" => "primary-nav-submenu-toggle-button", "aria-controls" =>                             // line 114
($context["aria_id"] ?? null), "aria-expanded" => "false", "aria-hidden" => "true", "tabindex" => "-1"]);
                            // line 120
                            yield "              <button";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["toggle_button_attributes"] ?? null), "html", null, true);
                            yield ">
                <span class=\"visually-hidden\">";
                            // line 121
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 121)]));
                            yield "</span>
                <span class=\"icon--menu-toggle\"></span>
              </button>
              ";
                            // line 124
                            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 124);
                            // line 125
                            yield "              ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 125, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 125), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                            yield "
            ";
                        }
                        // line 127
                        yield "          ";
                    } elseif ((($context["menu_item_type"] ?? null) == "button")) {
                        // line 128
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 128), ["class" =>                         // line 129
($context["link_classes"] ?? null), "aria-controls" => ((CoreExtension::getAttribute($this->env, $this->source,                         // line 130
$context["item"], "below", [], "any", false, false, true, 130)) ? (($context["aria_id"] ?? null)) : (false)), "aria-expanded" => ((CoreExtension::getAttribute($this->env, $this->source,                         // line 131
$context["item"], "below", [], "any", false, false, true, 131)) ? ("false") : (false)), "data-selector" => ((CoreExtension::getAttribute($this->env, $this->source,                         // line 132
$context["item"], "below", [], "any", false, false, true, 132)) ? ("primary-nav-submenu-toggle-button") : (false))]), "html", null, true);
                        // line 134
                        yield "
            ";
                        // line 135
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 135);
                        // line 136
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 136, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 136), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
          ";
                    }
                    // line 138
                    yield "        </li>
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/zeropoint/templates/navigation/menu--primary-menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  280 => 140,  265 => 138,  259 => 136,  257 => 135,  254 => 134,  252 => 132,  251 => 131,  250 => 130,  249 => 129,  247 => 128,  244 => 127,  238 => 125,  236 => 124,  230 => 121,  225 => 120,  223 => 114,  222 => 111,  220 => 110,  218 => 105,  216 => 104,  213 => 103,  211 => 100,  209 => 99,  206 => 98,  199 => 96,  196 => 95,  193 => 94,  188 => 88,  186 => 85,  185 => 84,  184 => 83,  183 => 82,  181 => 79,  179 => 76,  178 => 75,  177 => 74,  176 => 73,  175 => 72,  174 => 71,  173 => 70,  172 => 69,  170 => 66,  167 => 65,  164 => 64,  161 => 63,  158 => 62,  155 => 61,  152 => 60,  149 => 59,  131 => 58,  129 => 57,  124 => 56,  121 => 55,  118 => 54,  115 => 53,  112 => 52,  109 => 51,  106 => 50,  104 => 49,  100 => 47,  97 => 46,  95 => 42,  92 => 41,  89 => 40,  86 => 39,  83 => 38,  69 => 37,  61 => 143,  57 => 36,  55 => 35,  53 => 30,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/zeropoint/templates/navigation/menu--primary-menu.html.twig", "/var/www/html/lanister/web/themes/contrib/zeropoint/templates/navigation/menu--primary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 30, "set" => 35, "macro" => 37, "if" => 41, "for" => 58];
        static $filters = ["escape" => 56, "clean_id" => 94, "t" => 121];
        static $functions = ["link" => 99, "create_attribute" => 111];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id', 't'],
                ['link', 'create_attribute'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
