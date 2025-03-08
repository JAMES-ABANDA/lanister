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

/* themes/contrib/zeropoint/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_92e98e53bf73f6ed28bfc44934d5a455 extends Template
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
        // line 30
        $context["classes"] = ["block", "block-search", "container-inline"];
        // line 37
        $context["blk_title"] = ["title", "block-title"];
        // line 42
        yield "<div class=\"block-wrapper clearfix\">
<div";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 43), "html", null, true);
        yield ">
  ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 45
        if ((($context["label"] ?? null) && (($context["themed_block"] ?? null) || ($context["block_icon"] ?? null)))) {
            // line 46
            yield "  <div class=\"block-icon\"></div>
  ";
        }
        // line 48
        yield "  ";
        if (($context["block_seo"] ?? null)) {
            // line 49
            yield "  ";
            if (($context["label"] ?? null)) {
                // line 50
                yield "  <h3";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["blk_title"] ?? null)], "method", false, false, true, 50), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</h3>
  ";
            }
            // line 52
            yield "  ";
        } else {
            // line 53
            yield "  ";
            if (($context["label"] ?? null)) {
                // line 54
                yield "  <div ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["blk_title"] ?? null)], "method", false, false, true, 54), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</div>
  ";
            }
            // line 56
            yield "  ";
        }
        // line 57
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  <div class=\"block-content\">
    ";
        // line 59
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 62
        yield "  </div>
</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "themed_block", "block_icon", "block_seo", "title_attributes", "title_suffix", "content"]);        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
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
        return "themes/contrib/zeropoint/templates/block/block--search-form-block.html.twig";
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
        return array (  121 => 60,  114 => 59,  105 => 62,  103 => 59,  97 => 57,  94 => 56,  86 => 54,  83 => 53,  80 => 52,  72 => 50,  69 => 49,  66 => 48,  62 => 46,  60 => 45,  56 => 44,  52 => 43,  49 => 42,  47 => 37,  45 => 30,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/zeropoint/templates/block/block--search-form-block.html.twig", "/var/www/html/lanister/web/themes/contrib/zeropoint/templates/block/block--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 30, "if" => 45, "block" => 59];
        static $filters = ["escape" => 43];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
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
