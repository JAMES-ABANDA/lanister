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

/* themes/contrib/zeropoint/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_ee35ded7ba9d003f51c1cb64a580fa7c extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["classes"] = ["block", "block-menu", "navigation", ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 39
($context["derivative_plugin_id"] ?? null)))];
        // line 43
        $context["blk_title"] = ["title", "block-title"];
        // line 48
        yield "<div class=\"block-wrapper clearfix\">
";
        // line 49
        $context["heading_id"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 49) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 51
        yield "<nav aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 51), "role", "aria-labelledby"), "html", null, true);
        yield ">
  ";
        // line 53
        yield "  ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 53)) {
            // line 54
            yield "    ";
            $context["title_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["visually-hidden"], "method", false, false, true, 54);
            // line 55
            yield "  ";
        }
        // line 56
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 57
        if ((($context["label"] ?? null) && (($context["themed_block"] ?? null) || ($context["block_icon"] ?? null)))) {
            // line 58
            yield "  <div class=\"block-icon\"></div>
  ";
        }
        // line 60
        yield "  ";
        if (($context["block_seo"] ?? null)) {
            // line 61
            yield "  ";
            if (($context["label"] ?? null)) {
                // line 62
                yield "  <h3";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 62), "addClass", [($context["blk_title"] ?? null)], "method", false, false, true, 62), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 62), "html", null, true);
                yield "</h3>
  ";
            }
            // line 64
            yield "  ";
        } else {
            // line 65
            yield "  ";
            if (($context["label"] ?? null)) {
                // line 66
                yield "  <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 66), "addClass", [($context["blk_title"] ?? null)], "method", false, false, true, 66), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 66), "html", null, true);
                yield "</div>
  ";
            }
            // line 68
            yield "  ";
        }
        // line 69
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
";
        // line 71
        yield "  <div class=\"block-content\">
    ";
        // line 72
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 75
        yield "  </div>
</nav>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["derivative_plugin_id", "attributes", "configuration", "title_prefix", "label", "themed_block", "block_icon", "block_seo", "title_suffix", "content"]);        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/zeropoint/templates/block/block--system-menu-block.html.twig";
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
        return array (  139 => 73,  132 => 72,  123 => 75,  121 => 72,  118 => 71,  113 => 69,  110 => 68,  102 => 66,  99 => 65,  96 => 64,  88 => 62,  85 => 61,  82 => 60,  78 => 58,  76 => 57,  71 => 56,  68 => 55,  65 => 54,  62 => 53,  55 => 51,  53 => 49,  50 => 48,  48 => 43,  46 => 39,  45 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/zeropoint/templates/block/block--system-menu-block.html.twig", "/var/www/html/lanister/web/themes/contrib/zeropoint/templates/block/block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 35, "if" => 53, "block" => 72];
        static $filters = ["clean_class" => 39, "clean_id" => 49, "escape" => 51, "without" => 51];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without'],
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
