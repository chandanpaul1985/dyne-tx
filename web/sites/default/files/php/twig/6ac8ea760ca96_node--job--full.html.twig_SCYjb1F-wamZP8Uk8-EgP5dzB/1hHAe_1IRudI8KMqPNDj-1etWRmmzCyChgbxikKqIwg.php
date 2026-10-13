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
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/dynetx/templates/node--job--full.html.twig */
class __TwigTemplate_e3a7007a040d5623094908ceca207af4 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<section class=\"dyne-job-hero\" aria-label=\"Careers and culture\">
  <picture class=\"dyne-job-hero__base\">
    <source media=\"(max-width: 767px)\" srcset=\"";
        // line 3
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/hero-careers-bg-base-mobile@2x.webp\" />
    <img src=\"";
        // line 4
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/hero-careers-bg-base-desktop@2x-1-scaled.webp\" alt=\"\" fetchpriority=\"high\" />
  </picture>
  <img class=\"dyne-job-hero__overlay\" src=\"";
        // line 6
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/hero-careers-bg-overlay-desktop@2x-1-scaled.webp\" alt=\"\" />
  <p class=\"dyne-job-hero__word dyne-job-hero__word--more\" aria-hidden=\"true\">more</p>
  <p class=\"dyne-job-hero__word dyne-job-hero__word--passion\" aria-hidden=\"true\">passion</p>
</section>

<article";
        // line 11
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dyne-job-detail"], "method", false, false, true, 11), "html", null, true);
        yield ">
  <h1 class=\"dyne-job-detail__title\">";
        // line 12
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>

  ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_apply_url", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "    <div class=\"dyne-job-detail__apply dyne-job-detail__apply--top\">
      <a class=\"btn btn-primary btn-lg\" href=\"";
            // line 16
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_apply_url", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Apply for this job"));
            yield "</a>
    </div>
  ";
        }
        // line 19
        yield "
  <div class=\"dyne-job-detail__meta\">
    ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_department_text", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "      <p><strong>";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Department:"));
            yield "</strong> ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_department_text", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), "html", null, true);
            yield "</p>
    ";
        }
        // line 24
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_location_text", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "      <p><strong>";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Location:"));
            yield "</strong> ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_location_text", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), "html", null, true);
            yield "</p>
    ";
        }
        // line 27
        yield "  </div>

  <div class=\"dyne-job-detail__body\">
    ";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_body_text", [], "any", false, false, true, 30), "html", null, true);
        yield "
  </div>

  ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_apply_url", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <div class=\"dyne-job-detail__apply dyne-job-detail__apply--bottom\">
      <a class=\"btn btn-primary btn-lg\" href=\"";
            // line 35
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_apply_url", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Apply for this job"));
            yield "</a>
    </div>
  ";
        }
        // line 38
        yield "
  ";
        // line 39
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_previous_url", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_next_url", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 40
            yield "    <nav class=\"dyne-job-detail__pagination\" aria-label=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Job navigation"));
            yield "\">
      ";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_previous_url", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "        <a href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_previous_url", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), "html", null, true);
                yield "\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("BACK"));
                yield "</a>
      ";
            }
            // line 44
            yield "      ";
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_previous_url", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_next_url", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield "<span aria-hidden=\"true\">|</span>";
            }
            // line 45
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_next_url", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "        <a href=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_next_url", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), "html", null, true);
                yield "\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("NEXT"));
                yield "</a>
      ";
            }
            // line 48
            yield "    </nav>
  ";
        }
        // line 50
        yield "</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "attributes", "label", "node", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/dynetx/templates/node--job--full.html.twig";
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
        return array (  179 => 50,  175 => 48,  167 => 46,  164 => 45,  159 => 44,  151 => 42,  149 => 41,  144 => 40,  142 => 39,  139 => 38,  131 => 35,  128 => 34,  126 => 33,  120 => 30,  115 => 27,  107 => 25,  104 => 24,  96 => 22,  94 => 21,  90 => 19,  82 => 16,  79 => 15,  77 => 14,  72 => 12,  68 => 11,  59 => 6,  53 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/dynetx/templates/node--job--full.html.twig", "/var/www/html/web/themes/custom/dynetx/templates/node--job--full.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14];
        static $filters = ["escape" => 3, "t" => 16];
        static $functions = ["path" => 3];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape", 1 => "t"],
                [0 => "path"],
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
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
