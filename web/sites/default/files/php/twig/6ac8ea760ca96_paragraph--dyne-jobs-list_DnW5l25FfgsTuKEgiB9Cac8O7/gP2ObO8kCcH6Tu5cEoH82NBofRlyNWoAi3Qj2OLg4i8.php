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

/* themes/custom/dynetx/templates/paragraph--dyne-jobs-list.html.twig */
class __TwigTemplate_13059095a66207da462686c691ae2a45 extends Template
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
        // line 3
        yield "<section";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["dyne-jobs", "container", "py-5"], "method", false, false, true, 3), "setAttribute", ["id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_anchor", [], "any", false, true, true, 3), "value", [], "any", true, true, true, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_anchor", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), "")) : (""))], "method", false, false, true, 3), "html", null, true);
        if ((($tmp = ($context["dyne_use_job_records"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " data-dyne-jobs-source=\"content\"";
        }
        yield ">
  ";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_heading", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<h2 class=\"h1\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_heading", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4), "html", null, true);
            yield "</h2>";
        }
        // line 5
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_body_text", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"dyne-jobs__intro\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_body_text", [], "any", false, false, true, 5), "html", null, true);
            yield "</div>";
        }
        // line 6
        yield "  ";
        if ((($tmp = ($context["dyne_use_job_records"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    <div class=\"dyne-jobs__filters\" aria-label=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Filter open positions"));
            yield "\">
      <label>
        <span>";
            // line 9
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Department"));
            yield "</span>
        <select data-dyne-job-filter=\"department\">
          <option value=\"\">";
            // line 11
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ALL"));
            yield "</option>
          ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["dyne_job_departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 13
                yield "            <option value=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["department"], "filter_key", [], "any", false, false, true, 13), "html", null, true);
                yield "\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["department"], "label", [], "any", false, false, true, 13), "html", null, true);
                yield "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['department'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 15
            yield "        </select>
      </label>
      <label>
        <span>";
            // line 18
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Location"));
            yield "</span>
        <select data-dyne-job-filter=\"location\">
          <option value=\"\">";
            // line 20
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ALL"));
            yield "</option>
          ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["dyne_job_locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 22
                yield "            <option value=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["location"], "filter_key", [], "any", false, false, true, 22), "html", null, true);
                yield "\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["location"], "label", [], "any", false, false, true, 22), "html", null, true);
                yield "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 24
            yield "        </select>
      </label>
    </div>
    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["dyne_job_groups"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 28
                yield "      <section class=\"dyne-jobs__group\" data-dyne-job-group=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["group"], "filter_key", [], "any", false, false, true, 28), "html", null, true);
                yield "\">
        <h3>";
                // line 29
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, true, 29), "html", null, true);
                yield "</h3>
        <ul>
          ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "jobs", [], "any", false, false, true, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                    // line 32
                    yield "            <li data-dyne-job-location=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["job"], "location_filter", [], "any", false, false, true, 32), "html", null, true);
                    yield "\">
              <a href=\"";
                    // line 33
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["job"], "url", [], "any", false, false, true, 33), "html", null, true);
                    yield "\">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, true, 33), "html", null, true);
                    yield "</a>
            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['job'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 36
                yield "        </ul>
      </section>
    ";
                $context['_iterated'] = true;
            }
            // line 38
            if (!$context['_iterated']) {
                // line 39
                yield "      <p class=\"dyne-jobs__empty\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("There are no open positions at this time."));
                yield "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 41
            yield "    ";
            if ((($tmp = ($context["dyne_job_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "      <p class=\"dyne-jobs__empty\" data-dyne-jobs-empty hidden>";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No open positions match these filters."));
                yield "</p>
    ";
            }
            // line 44
            yield "  ";
        } else {
            // line 45
            yield "    <ul class=\"list-group\">
      ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["dyne_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 47
                yield "        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
          <span><a href=\"";
                // line 48
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "url", [], "any", false, false, true, 48), "html", null, true);
                yield "\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "title", [], "any", false, false, true, 48), "html", null, true);
                yield "</a><br /><small>";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "department", [], "any", false, false, true, 48), "html", null, true);
                yield " · ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "location", [], "any", false, false, true, 48), "html", null, true);
                yield "</small></span>
          <a href=\"";
                // line 49
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["j"], "url", [], "any", false, false, true, 49), "html", null, true);
                yield "\" class=\"btn btn-primary\">Apply</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['j'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 52
            yield "    </ul>
  ";
        }
        // line 54
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "paragraph", "dyne_use_job_records", "content", "dyne_job_departments", "dyne_job_locations", "dyne_job_groups", "dyne_items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/dynetx/templates/paragraph--dyne-jobs-list.html.twig";
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
        return array (  234 => 54,  230 => 52,  220 => 49,  210 => 48,  207 => 47,  203 => 46,  200 => 45,  197 => 44,  191 => 42,  188 => 41,  178 => 39,  176 => 38,  170 => 36,  158 => 33,  153 => 32,  149 => 31,  144 => 29,  139 => 28,  134 => 27,  129 => 24,  117 => 22,  113 => 21,  109 => 20,  104 => 18,  99 => 15,  87 => 13,  83 => 12,  79 => 11,  74 => 9,  68 => 7,  65 => 6,  58 => 5,  52 => 4,  44 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/dynetx/templates/paragraph--dyne-jobs-list.html.twig", "/var/www/html/web/themes/custom/dynetx/templates/paragraph--dyne-jobs-list.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3, "for" => 12];
        static $filters = ["escape" => 3, "default" => 3, "t" => 7];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for"],
                [0 => "escape", 1 => "default", 2 => "t"],
                [],
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
