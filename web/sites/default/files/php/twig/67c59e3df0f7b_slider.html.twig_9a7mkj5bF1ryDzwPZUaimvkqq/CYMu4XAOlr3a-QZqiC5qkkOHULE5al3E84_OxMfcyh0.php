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

/* @zeropoint/includes/slider.html.twig */
class __TwigTemplate_c2a569f3e2ce6a23d0944f44e31853b3 extends Template
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
        // line 1
        yield "<div id=\"slider\" ";
        if ((($context["slidety"] ?? null) == 0)) {
            yield "style=\"max-width: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["wrapper"] ?? null), "html", null, true);
            yield "; margin: 0 auto;\"";
        }
        yield ">
<ul class=\"slides\">
";
        // line 3
        if (($context["show_slide1"] ?? null)) {
            // line 4
            yield "  <li>
    <div class=\"post slide1\">
    <div class=\"entry-container\">
    <div class=\"txww\">
      <div class=\"entry-header\"><div class=\"entry-title\"><a href=\"";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide1_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide1_head"] ?? null)));
            yield "</a></div></div>
      <div class=\"entry-summary\">";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide1_desc"] ?? null)));
            yield "</div>      
    </div>
    </div>
    <a href=\"";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide1_url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide1_image_url"] ?? null), "html", null, true);
            yield "\" loading=\"eager\" class=\"pure-img slide-image\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide1_alt"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["slideh"] ?? null)) {
                yield "style=\"max-height: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideh"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></a>
    </div>
  </li>
";
        }
        // line 16
        if (($context["show_slide2"] ?? null)) {
            // line 17
            yield "  <li>
    <div class=\"post slide2\">
    <div class=\"entry-container\">
    <div class=\"txww\">
      <div class=\"entry-header\"><div class=\"entry-title\"><a href=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide2_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide2_head"] ?? null)));
            yield "</a></div></div>
      <div class=\"entry-summary\">";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide2_desc"] ?? null)));
            yield "</div>
    </div>
    </div>
    <a href=\"";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide2_url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide2_image_url"] ?? null), "html", null, true);
            yield "\" loading=\"lazy\" class=\"pure-img slide-image\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide2_alt"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["slideh"] ?? null)) {
                yield "style=\"max-height: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideh"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></a>
    </div>
  </li>
";
        }
        // line 29
        if (($context["show_slide3"] ?? null)) {
            // line 30
            yield "  <li>
    <div class=\"post slide3\">
    <div class=\"entry-container\">
    <div class=\"txww\">
      <div class=\"entry-header\"><div class=\"entry-title\"><a href=\"";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide3_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide3_head"] ?? null)));
            yield "</a></div></div>
      <div class=\"entry-summary\">";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide3_desc"] ?? null)));
            yield "</div>
    </div>
    </div>
    <a href=\"";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide3_url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide3_image_url"] ?? null), "html", null, true);
            yield "\" loading=\"lazy\" class=\"pure-img slide-image\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide3_alt"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["slideh"] ?? null)) {
                yield "style=\"max-height: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideh"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></a>
    </div>
  </li>
";
        }
        // line 42
        if (($context["show_slide4"] ?? null)) {
            // line 43
            yield "  <li>
    <div class=\"post slide4\">
    <div class=\"entry-container\">
    <div class=\"txww\">
      <div class=\"entry-header\"><div class=\"entry-title\"><a href=\"";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide4_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide4_head"] ?? null)));
            yield "</a></div></div>
      <div class=\"entry-summary\">";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide4_desc"] ?? null)));
            yield "</div>
    </div>
    </div>
    <a href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide4_url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide4_image_url"] ?? null), "html", null, true);
            yield "\" loading=\"lazy\" class=\"pure-img slide-image\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide4_alt"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["slideh"] ?? null)) {
                yield "style=\"max-height: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideh"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></a>
    </div>
  </li>
";
        }
        // line 55
        if (($context["show_slide5"] ?? null)) {
            // line 56
            yield "  <li>
    <div class=\"post slide5\">
    <div class=\"entry-container\">
    <div class=\"txww\">
      <div class=\"entry-header\"><div class=\"entry-title\"><a href=\"";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide5_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide5_head"] ?? null)));
            yield "</a></div></div>
      <div class=\"entry-summary\">";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide5_desc"] ?? null)));
            yield "</div>
    </div>
    </div>
    <a href=\"";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide5_url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide5_image_url"] ?? null), "html", null, true);
            yield "\" loading=\"lazy\" class=\"pure-img slide-image\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide5_alt"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["slideh"] ?? null)) {
                yield "style=\"max-height: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideh"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></a>
    </div>
  </li>
";
        }
        // line 68
        if (($context["show_slide6"] ?? null)) {
            // line 69
            yield "  <li>
    <div class=\"post slide6\">
    <div class=\"entry-container\">
    <div class=\"txww\">
      <div class=\"entry-header\"><div class=\"entry-title\"><a href=\"";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide6_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide6_head"] ?? null)));
            yield "</a></div></div>
      <div class=\"entry-summary\">";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide6_desc"] ?? null)));
            yield "</div>
    </div>
    </div>
    <a href=\"";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide6_url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide6_image_url"] ?? null), "html", null, true);
            yield "\" loading=\"lazy\" class=\"pure-img slide-image\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide6_alt"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["slideh"] ?? null)) {
                yield "style=\"max-height: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideh"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></a>
    </div>
  </li>
";
        }
        // line 81
        if (($context["show_slide7"] ?? null)) {
            // line 82
            yield "  <li>
    <div class=\"post slide7\">
    <div class=\"entry-container\">
    <div class=\"txww\">
      <div class=\"entry-header\"><div class=\"entry-title\"><a href=\"";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide7_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide7_head"] ?? null)));
            yield "</a></div></div>
      <div class=\"entry-summary\">";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["slide7_desc"] ?? null)));
            yield "</div>
    </div>
    </div>
    <a href=\"";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide7_url"] ?? null), "html", null, true);
            yield "\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide7_image_url"] ?? null), "html", null, true);
            yield "\" loading=\"lazy\" class=\"pure-img slide-image\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slide7_alt"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["slideh"] ?? null)) {
                yield "style=\"max-height: ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideh"] ?? null), "html", null, true);
                yield "\"";
            }
            yield "></a>
    </div>
  </li>
";
        }
        // line 94
        yield "</ul>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["slidety", "wrapper", "show_slide1", "slide1_url", "slide1_head", "slide1_desc", "slide1_image_url", "slide1_alt", "slideh", "show_slide2", "slide2_url", "slide2_head", "slide2_desc", "slide2_image_url", "slide2_alt", "show_slide3", "slide3_url", "slide3_head", "slide3_desc", "slide3_image_url", "slide3_alt", "show_slide4", "slide4_url", "slide4_head", "slide4_desc", "slide4_image_url", "slide4_alt", "show_slide5", "slide5_url", "slide5_head", "slide5_desc", "slide5_image_url", "slide5_alt", "show_slide6", "slide6_url", "slide6_head", "slide6_desc", "slide6_image_url", "slide6_alt", "show_slide7", "slide7_url", "slide7_head", "slide7_desc", "slide7_image_url", "slide7_alt"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@zeropoint/includes/slider.html.twig";
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
        return array (  327 => 94,  309 => 90,  303 => 87,  296 => 86,  290 => 82,  288 => 81,  270 => 77,  264 => 74,  257 => 73,  251 => 69,  249 => 68,  231 => 64,  225 => 61,  218 => 60,  212 => 56,  210 => 55,  192 => 51,  186 => 48,  179 => 47,  173 => 43,  171 => 42,  153 => 38,  147 => 35,  140 => 34,  134 => 30,  132 => 29,  114 => 25,  108 => 22,  101 => 21,  95 => 17,  93 => 16,  75 => 12,  69 => 9,  62 => 8,  56 => 4,  54 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@zeropoint/includes/slider.html.twig", "/var/www/html/lanister/web/themes/contrib/zeropoint/templates/includes/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 1, "t" => 8, "raw" => 9];
        static $functions = ["path" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'raw'],
                ['path'],
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
