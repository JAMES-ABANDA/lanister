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

/* themes/contrib/zeropoint/templates/layout/page.html.twig */
class __TwigTemplate_174b3a0367eb766b6b120a54dd46a2db extends Template
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
        // line 60
        yield "<div id=\"pgwp\">
<div id=\"top_bg\">
<div class=\"sizer0 clearfix\"";
        // line 62
        if (($context["wrapper"] ?? null)) {
            yield " style=\"max-width: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
<div id=\"top_left\">
<div id=\"top_right\">
<div id=\"headimg\">

<header id=\"header\" class=\"clearfix\">
";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topreg", [], "any", false, false, true, 68)) {
            // line 69
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topreg", [], "any", false, false, true, 69), "html", null, true);
            yield "
";
        }
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), "html", null, true);
            yield "
";
        }
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 74)) {
            // line 75
            yield "<div id=\"menu\">
<div class=\"menuband clearfix\">
  ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 77), "html", null, true);
            yield "
</div>
</div>
";
        }
        // line 81
        yield "</header>

</div></div></div></div></div><!-- Header -->

<div id=\"body_bg\">
<div class=\"sizer0 clearfix\"";
        // line 86
        if (($context["wrapper"] ?? null)) {
            yield " style=\"max-width: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
<div id=\"body_left\">
<div id=\"body_right\" class=\"clearfix\">

";
        // line 90
        if (($context["slideshow_display"] ?? null)) {
            // line 91
            if ((($context["is_front"] ?? null) || ($context["slideshow_all"] ?? null))) {
                // line 92
                yield from $this->loadTemplate("@zeropoint/includes/slider.html.twig", "themes/contrib/zeropoint/templates/layout/page.html.twig", 92)->unwrap()->yield($context);
            }
        }
        // line 95
        yield "
";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 96)) {
            // line 97
            yield "<div id=\"submenu\">
  ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 98), "html", null, true);
            yield "
</div>
";
        }
        // line 101
        yield "
<div class=\"clearfix\">";
        // line 102
        if (($context["is_front"] ?? null)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["devlk"] ?? null));
        }
        // line 103
        if (($context["breadcrumb_display"] ?? null)) {
            // line 104
            yield "<div id=\"breadcrumb\" class=\"clearfix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 104), "html", null, true);
            yield "</div>
";
        }
        // line 106
        yield "</div>

";
        // line 108
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user1", [], "any", false, false, true, 108) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user2", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user3", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user4", [], "any", false, false, true, 108))) {
            // line 109
            yield "<div id=\"section1\" class=\"sections pure-g\">
";
            // line 110
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user1", [], "any", false, false, true, 110)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_1"] ?? null), "html", null, true);
                yield "\"><div class=\"u1\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user1", [], "any", false, false, true, 110), "html", null, true);
                yield "</div></div>";
            }
            // line 111
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user2", [], "any", false, false, true, 111)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_1"] ?? null), "html", null, true);
                yield "\"><div class=\"u2 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["divider"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user2", [], "any", false, false, true, 111), "html", null, true);
                yield "</div></div>";
            }
            // line 112
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user3", [], "any", false, false, true, 112)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_1"] ?? null), "html", null, true);
                yield "\"><div class=\"u3 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["divider"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user3", [], "any", false, false, true, 112), "html", null, true);
                yield "</div></div>";
            }
            // line 113
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user4", [], "any", false, false, true, 113)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_1"] ?? null), "html", null, true);
                yield "\"><div class=\"u4 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["divider"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user4", [], "any", false, false, true, 113), "html", null, true);
                yield "</div></div>";
            }
            // line 114
            yield "</div>
";
        }
        // line 116
        yield "
<div id=\"middlecontainer\" class=\"pure-g\">

";
        // line 119
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119)) {
            // line 120
            yield "<div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["first_width"] ?? null), "html", null, true);
            yield "\">
  <aside id=\"sidebar-left\">";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121), "html", null, true);
            yield "</aside>
</div>
";
        }
        // line 124
        yield "
  <div class=\"";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cont_class"] ?? null), "html", null, true);
        yield "\">
    <main id=\"main\">
      ";
        // line 127
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 127), "html", null, true);
        yield "
      ";
        // line 128
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128)) {
            // line 129
            yield "        <div id=\"mission\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129), "html", null, true);
            yield "</div>
      ";
        }
        // line 131
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 131)) {
            // line 132
            yield "        <div id=\"content-above\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 132), "html", null, true);
            yield "</div>
      ";
        }
        // line 134
        yield "      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 135
        yield "      <div class=\"layout-content\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 135), "html", null, true);
        yield "</div>";
        // line 136
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 136)) {
            // line 137
            yield "        <div id=\"content-below\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 137), "html", null, true);
            yield "</div>
      ";
        }
        // line 139
        yield "    </main>
  </div>

";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 142)) {
            // line 143
            yield "<div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["second_width"] ?? null), "html", null, true);
            yield "\">
  <aside id=\"sidebar-right\">";
            // line 144
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 144), "html", null, true);
            yield "</aside>
</div>
";
        }
        // line 147
        yield "
</div>

";
        // line 150
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user5", [], "any", false, false, true, 150) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user6", [], "any", false, false, true, 150)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user7", [], "any", false, false, true, 150)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user8", [], "any", false, false, true, 150))) {
            // line 151
            yield "<div id=\"section2\" class=\"sections pure-g\">
";
            // line 152
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user5", [], "any", false, false, true, 152)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_2"] ?? null), "html", null, true);
                yield "\"><div class=\"u5\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user5", [], "any", false, false, true, 152), "html", null, true);
                yield "</div></div>";
            }
            // line 153
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user6", [], "any", false, false, true, 153)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_2"] ?? null), "html", null, true);
                yield "\"><div class=\"u6 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["divider"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user6", [], "any", false, false, true, 153), "html", null, true);
                yield "</div></div>";
            }
            // line 154
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user7", [], "any", false, false, true, 154)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_2"] ?? null), "html", null, true);
                yield "\"><div class=\"u7 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["divider"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user7", [], "any", false, false, true, 154), "html", null, true);
                yield "</div></div>";
            }
            // line 155
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user8", [], "any", false, false, true, 155)) {
                yield "<div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["section_class_2"] ?? null), "html", null, true);
                yield "\"><div class=\"u8 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["divider"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user8", [], "any", false, false, true, 155), "html", null, true);
                yield "</div></div>";
            }
            // line 156
            yield "</div>
";
        }
        // line 158
        yield "
";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tertiary_menu", [], "any", false, false, true, 159)) {
            // line 160
            yield "<div id=\"menu2\">
  ";
            // line 161
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tertiary_menu", [], "any", false, false, true, 161), "html", null, true);
            yield "
</div>
";
        }
        // line 164
        yield "
</div></div></div></div><!-- Middle page -->

<div id=\"bottom_bg\">
<div class=\"sizer0 clearfix\"";
        // line 168
        if (($context["wrapper"] ?? null)) {
            yield " style=\"max-width: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
<div id=\"bottom_left\">
<div id=\"bottom_right\">

<div id=\"footer\" class=\"pure-g\" role=\"contentinfo\">
<div class=\"pure-u-1 pure-u-md-1-5\">
";
        // line 174
        if (($context["social_links_display"] ?? null)) {
            // line 175
            yield from $this->loadTemplate("@zeropoint/includes/social_links.html.twig", "themes/contrib/zeropoint/templates/layout/page.html.twig", 175)->unwrap()->yield($context);
        }
        // line 177
        yield "</div>
<div class=\"pure-u-1 pure-u-md-3-5\">";
        // line 178
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 178)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 178), "html", null, true);
        }
        yield "</div>
<div class=\"pure-u-1 pure-u-md-1-5\">";
        // line 179
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 179)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 179), "html", null, true);
        }
        yield "</div>
<div class=\"footer-below\">";
        // line 180
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_below", [], "any", false, false, true, 180)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_below", [], "any", false, false, true, 180), "html", null, true);
        }
        yield "</div>
</div>

<div id=\"brand\"></div>

</div></div></div></div></div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["wrapper", "page", "slideshow_display", "is_front", "slideshow_all", "devlk", "breadcrumb_display", "section_class_1", "divider", "first_width", "cont_class", "second_width", "section_class_2", "social_links_display"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/zeropoint/templates/layout/page.html.twig";
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
        return array (  381 => 180,  375 => 179,  369 => 178,  366 => 177,  363 => 175,  361 => 174,  348 => 168,  342 => 164,  336 => 161,  333 => 160,  331 => 159,  328 => 158,  324 => 156,  314 => 155,  304 => 154,  294 => 153,  286 => 152,  283 => 151,  281 => 150,  276 => 147,  270 => 144,  265 => 143,  263 => 142,  258 => 139,  252 => 137,  249 => 136,  245 => 135,  243 => 134,  237 => 132,  234 => 131,  228 => 129,  226 => 128,  222 => 127,  217 => 125,  214 => 124,  208 => 121,  203 => 120,  201 => 119,  196 => 116,  192 => 114,  182 => 113,  172 => 112,  162 => 111,  154 => 110,  151 => 109,  149 => 108,  145 => 106,  139 => 104,  137 => 103,  133 => 102,  130 => 101,  124 => 98,  121 => 97,  119 => 96,  116 => 95,  112 => 92,  110 => 91,  108 => 90,  97 => 86,  90 => 81,  83 => 77,  79 => 75,  77 => 74,  71 => 72,  69 => 71,  63 => 69,  61 => 68,  48 => 62,  44 => 60,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/zeropoint/templates/layout/page.html.twig", "/var/www/html/lanister/web/themes/contrib/zeropoint/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 62, "include" => 92];
        static $filters = ["escape" => 62, "raw" => 102];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'raw'],
                [],
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
