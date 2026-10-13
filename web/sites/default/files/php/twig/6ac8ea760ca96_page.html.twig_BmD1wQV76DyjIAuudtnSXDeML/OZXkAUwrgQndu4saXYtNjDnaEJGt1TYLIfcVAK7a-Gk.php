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

/* themes/custom/dynetx/templates/page.html.twig */
class __TwigTemplate_f3dd1bd9421e27c9c34e12a379a56d32 extends Template
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
        // line 4
        yield "<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "</a>
<div class=\"visually-hidden\">";
        // line 5
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Please ensure Javascript is enabled for purposes of website accessibility"));
        yield "</div>

";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alert_banner", [], "any", false, false, true, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  <div class=\"duchenne-alert-bar\" role=\"banner\">
    <div class=\"container d-flex align-items-center gap-3\">
      <img src=\"";
            // line 10
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
            yield "/images/logo-duchenne.svg\" alt=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Duchenne Awareness Day logo"));
            yield "\" class=\"img-fluid\" height=\"40\" />
      <p class=\"mb-0\">";
            // line 11
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("On September 7, we join the Duchenne community for World Duchenne Awareness Day, making a difference by focusing on therapies that are designed to deliver functional improvement for individuals living with DMD."));
            yield "</p>
    </div>
  </div>
";
        }
        // line 15
        yield "
<header class=\"dyne-header sticky-top\">
  <div class=\"container d-flex align-items-center justify-content-between py-2\">
    <a href=\"";
        // line 18
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" class=\"logo\" aria-label=\"Dyne home\">
      <img src=\"";
        // line 19
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/logo.svg\" height=\"50\" class=\"img-fluid\" alt=\"Dyne logo\" />
    </a>
    <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#dyneMobileDrawer\" aria-controls=\"dyneMobileDrawer\" aria-label=\"";
        // line 21
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open navigation"));
        yield "\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <nav class=\"dyne-nav navbar navbar-expand-lg d-none d-lg-flex\" aria-label=\"Primary\">
      ";
        // line 25
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 25), "html", null, true);
        yield "
    </nav>
  </div>
  <div class=\"offcanvas offcanvas-end\" id=\"dyneMobileDrawer\" tabindex=\"-1\" aria-labelledby=\"dyneMobileDrawerLabel\">
    <div class=\"offcanvas-header\">
      <strong id=\"dyneMobileDrawerLabel\">";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        yield "</strong>
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"";
        // line 31
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
        yield "\"></button>
    </div>
    <div class=\"offcanvas-body\">
      ";
        // line 34
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_drawer", [], "any", false, false, true, 34), "html", null, true);
        yield "
      <nav class=\"dyne-mobile-nav\" aria-label=\"";
        // line 35
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Mobile primary"));
        yield "\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 35), "html", null, true);
        yield "</nav>
    </div>
  </div>
</header>

";
        // line 40
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 40), "html", null, true);
        yield "
";
        // line 41
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 41), "html", null, true);
        yield "

<main id=\"main-content\" class=\"dyne-main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  ";
        // line 45
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 45), "html", null, true);
        yield "
</main>

<footer class=\"dyne-footer mt-5\" role=\"contentinfo\">
  <div class=\"stay-in-touch py-4\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 col-lg-5 moto\">";
        // line 52
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Stay in touch"));
        yield "</div>
        <div class=\"col-12 col-lg-7\">
          ";
        // line 54
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "stay_in_touch", [], "any", false, false, true, 54), "html", null, true);
        yield "
          <ul class=\"nav foot-nav pb-2 pb-md-3\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"mailto:info@dyne-tx.com\">info@dyne-tx.com</a></li>
            <li class=\"nav-item ms-auto\"><a class=\"nav-link\" href=\"tel:781-786-8230\">781.786.8230</a></li>
            <li class=\"nav-item socials mt-2 ms-auto\">
              <a class=\"nav-link me-3\" target=\"_blank\" rel=\"noopener\" title=\"opens in a new window\" href=\"https://www.linkedin.com/company/dynetx\"><span class=\"sr-only\">www.linkedin.com</span></a>
              <a class=\"nav-link me-3\" target=\"_blank\" rel=\"noopener\" title=\"opens in a new window\" href=\"https://twitter.com/dyne_tx\"><span class=\"sr-only\">twitter.com</span></a>
              <a class=\"nav-link me-3\" target=\"_blank\" rel=\"noopener\" title=\"opens in a new window\" href=\"https://www.facebook.com/DyneTherapeutic/\"><span class=\"sr-only\">www.facebook.com</span></a>
              <a class=\"nav-link\" target=\"_blank\" rel=\"noopener\" title=\"opens in a new window\" href=\"https://www.youtube.com/@dynetherapeutics\"><span class=\"sr-only\">www.youtube.com</span></a>
            </li>
          </ul>
          <div class=\"pt-2 pt-md-3 d-flex justify-content-between\">
            ";
        // line 66
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 66), "html", null, true);
        yield "
          </div>
        </div>
      </div>
    </div>
    <p class=\"mb-0 mt-3\">&copy; 2026 Dyne Therapeutics, Inc.</p>
  </div>
</footer>

";
        // line 76
        yield "<div class=\"modal fade\" id=\"dyneExitModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <p>";
        // line 80
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("You are now leaving the Dyne Therapeutics corporate website"));
        yield "</p>
        <div class=\"d-flex gap-2\">
          <a href=\"#\" id=\"dyneExitContinue\" class=\"btn btn-primary\" target=\"_blank\" rel=\"noopener\">";
        // line 82
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Continue"));
        yield "</a>
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 83
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Stay on page"));
        yield "</button>
        </div>
      </div>
    </div>
  </div>
</div>

";
        // line 90
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modals", [], "any", false, false, true, 90), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/dynetx/templates/page.html.twig";
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
        return array (  206 => 90,  196 => 83,  192 => 82,  187 => 80,  181 => 76,  169 => 66,  154 => 54,  149 => 52,  139 => 45,  132 => 41,  128 => 40,  118 => 35,  114 => 34,  108 => 31,  104 => 30,  96 => 25,  89 => 21,  83 => 19,  79 => 18,  74 => 15,  67 => 11,  60 => 10,  56 => 8,  54 => 7,  49 => 5,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/dynetx/templates/page.html.twig", "/var/www/html/web/themes/custom/dynetx/templates/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7];
        static $filters = ["t" => 4, "escape" => 10];
        static $functions = ["path" => 10];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "t", 1 => "escape"],
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
