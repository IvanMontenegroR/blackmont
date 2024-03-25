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

/* themes/contrib/bootstrap/templates/components/podcast-card-list/paragraph--podcast-card-list.html.twig */
class __TwigTemplate_9f4bbb193022512d88f2eb8b4a04a166 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"podcast-card-list\">
      ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_podcast_card", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
</div>


<style type=\"text/css\">
.field--items {
  display: flex;
  flex-wrap: wrap;
  gap: 20px; /* Adjust the space between cards as needed */
  justify-content: center; /* Center the cards within the container */
}

</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/components/podcast-card-list/paragraph--podcast-card-list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# paragraph--podcast-card-list.html.twig #}
<div class=\"podcast-card-list\">
      {{ content.field_podcast_card }}
</div>


<style type=\"text/css\">
.field--items {
  display: flex;
  flex-wrap: wrap;
  gap: 20px; /* Adjust the space between cards as needed */
  justify-content: center; /* Center the cards within the container */
}

</style>", "themes/contrib/bootstrap/templates/components/podcast-card-list/paragraph--podcast-card-list.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/components/podcast-card-list/paragraph--podcast-card-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
