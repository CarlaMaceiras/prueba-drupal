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

/* themes/custom/custom_bartik/templates/block--custom-bartik-menudehamburguesa.html.twig */
class __TwigTemplate_ab19e06190f4e5262a2fd1ca9135268f extends Template
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
        yield "<div class=\"header\">
    <button class=\"hamburger\" aria-label=\"Abrir menú\">
        &#9776;
    </button>
    <nav class=\"hamburguer-menu\" aria-hidden=\"true\">
        <ul>
            <li><a href=\"/home\">Inicio</a></li>
            <li><a href=\"/servicios\">Servicios</a></li>
            <li><a href=\"/nosotros\">Nosotros</a></li>
            <li><a href=\"/contacto\">Contacto</a></li>
        </ul>
        <form class=\"search-form\" action=\"/search\" method=\"get\">
            <input type=\"text\" name=\"query\" placeholder=\"Buscar...\" aria-label=\"Buscar\">
            <button type=\"submit\">Buscar</button>
        </form>
    </nav>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_bartik/templates/block--custom-bartik-menudehamburguesa.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"header\">
    <button class=\"hamburger\" aria-label=\"Abrir menú\">
        &#9776;
    </button>
    <nav class=\"hamburguer-menu\" aria-hidden=\"true\">
        <ul>
            <li><a href=\"/home\">Inicio</a></li>
            <li><a href=\"/servicios\">Servicios</a></li>
            <li><a href=\"/nosotros\">Nosotros</a></li>
            <li><a href=\"/contacto\">Contacto</a></li>
        </ul>
        <form class=\"search-form\" action=\"/search\" method=\"get\">
            <input type=\"text\" name=\"query\" placeholder=\"Buscar...\" aria-label=\"Buscar\">
            <button type=\"submit\">Buscar</button>
        </form>
    </nav>
</div>
", "themes/custom/custom_bartik/templates/block--custom-bartik-menudehamburguesa.html.twig", "/var/www/html/web/themes/custom/custom_bartik/templates/block--custom-bartik-menudehamburguesa.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
            }

            throw $e;
        }

    }
}
