<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/crud/field/id.html.twig */
class __TwigTemplate_85e2dc1e2ab69db270d57675d4716fea0685e34c9d481f4609ea236ed203bbcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/id.html.twig", "/Users/andranikhakobyan/Desktop/ecommerce_symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/id.html.twig");
    }
}
