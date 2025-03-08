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

/* @zeropoint/includes/social_links.html.twig */
class __TwigTemplate_abe8b73cea4589208375ab3520f4afe5 extends Template
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
        yield "<div id=\"soclinks\">
";
        // line 2
        if (($context["facebook_url"] ?? null)) {
            // line 3
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks facebook\" title=\"Facebook\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-square-facebook\"></i></a>
";
        }
        // line 5
        if (($context["google_plus_url"] ?? null)) {
            // line 6
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks googleplus\" title=\"Google+\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-square-google-plus\"></i></a>
";
        }
        // line 8
        if (($context["twitter_url"] ?? null)) {
            // line 9
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks twitter\" title=\"Twitter\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-square-x-twitter\"></i></a>
";
        }
        // line 11
        if (($context["instagram_url"] ?? null)) {
            // line 12
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["instagram_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks instagram\" title=\"Instagram\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-square-instagram\"></i></a>
";
        }
        // line 14
        if (($context["telegram_url"] ?? null)) {
            // line 15
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["telegram_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks telegram\" title=\"Telegram\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-telegram\"></i></a>
";
        }
        // line 17
        if (($context["pinterest_url"] ?? null)) {
            // line 18
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks pinterest\" title=\"Pinterest\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-square-pinterest\"></i></a>
";
        }
        // line 20
        if (($context["linkedin_url"] ?? null)) {
            // line 21
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks linkedin\" title=\"LinkedIn\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-linkedin\"></i></a>
";
        }
        // line 23
        if (($context["youtube_url"] ?? null)) {
            // line 24
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["youtube_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks youtube\" title=\"Youtube\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-square-youtube\"></i></a>
";
        }
        // line 26
        if (($context["vimeo_url"] ?? null)) {
            // line 27
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["vimeo_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks vimeo\" title=\"Vimeo\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-vimeo\"></i></a>
";
        }
        // line 29
        if (($context["flickr_url"] ?? null)) {
            // line 30
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["flickr_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks flickr\" title=\"Flickr\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-flickr\"></i></a>
";
        }
        // line 32
        if (($context["tumblr_url"] ?? null)) {
            // line 33
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tumblr_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks tumblr\" title=\"Tumblr\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-square-tumblr\"></i></a>
";
        }
        // line 35
        if (($context["skype_url"] ?? null)) {
            // line 36
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["skype_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks skype\" title=\"Skype\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-brands fa-skype\"></i></a>
";
        }
        // line 38
        if (($context["drupal_url"] ?? null)) {
            // line 39
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["drupal_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks drupal\" title=\"Drupal\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-drupal\"></i></a>
";
        }
        // line 41
        if (($context["rss_url"] ?? null)) {
            // line 42
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks rss\" title=\"RSS\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-solid fa-square-rss\"></i></a>
";
        }
        // line 44
        if (($context["myother_url"] ?? null)) {
            // line 45
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["myother_url"] ?? null), "html", null, true);
            yield "\" class=\"sociallinks myother\" title=\"!\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa-solid fa-globe\"></i></a>
";
        }
        // line 47
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["facebook_url", "google_plus_url", "twitter_url", "instagram_url", "telegram_url", "pinterest_url", "linkedin_url", "youtube_url", "vimeo_url", "flickr_url", "tumblr_url", "skype_url", "drupal_url", "rss_url", "myother_url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@zeropoint/includes/social_links.html.twig";
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
        return array (  167 => 47,  161 => 45,  159 => 44,  153 => 42,  151 => 41,  145 => 39,  143 => 38,  137 => 36,  135 => 35,  129 => 33,  127 => 32,  121 => 30,  119 => 29,  113 => 27,  111 => 26,  105 => 24,  103 => 23,  97 => 21,  95 => 20,  89 => 18,  87 => 17,  81 => 15,  79 => 14,  73 => 12,  71 => 11,  65 => 9,  63 => 8,  57 => 6,  55 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@zeropoint/includes/social_links.html.twig", "/var/www/html/lanister/web/themes/contrib/zeropoint/templates/includes/social_links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2];
        static $filters = ["escape" => 3];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
