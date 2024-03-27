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

/* themes/contrib/bootstrap/templates/components/article-card/paragraph--article-card.html.twig */
class __TwigTemplate_74b763f4c2c9ff431aa1f2dc859a2d4c extends Template
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
        // line 1
        echo "<article class=\"article-card\">

";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_article_page", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "field_image", [], "any", false, false, true, 4)) {
            // line 5
            echo "    ";
            $context["article_image_file"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_article_page", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "field_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5);
            // line 6
            echo "    <div class=\"article-image\">
        <img src=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article_image_file"] ?? null), "uri", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["article_image_file"] ?? null), "alt", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\">
    </div>
";
        }
        // line 11
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_article_page", [], "any", false, false, true, 13), "entity", [], "any", false, false, true, 13)) {
            // line 14
            echo "    <div class=\"article-info\">
        <h3 class=\"article-title\">";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_article_page", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "label", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</h3>
        <p class=\"article-summary\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_article_page", [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "body", [], "any", false, false, true, 16), "summary", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_article_page", [], "any", false, false, true, 17), "entity", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Read More");
            echo "</a>
                </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/components/article-card/paragraph--article-card.html.twig";
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
        return array (  75 => 17,  71 => 16,  67 => 15,  64 => 14,  62 => 13,  59 => 11,  51 => 7,  48 => 6,  45 => 5,  43 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"article-card\">

{# START OF Image Section #}
{% if paragraph.field_article_page.entity.field_image %}
    {% set article_image_file = paragraph.field_article_page.entity.field_image.entity %}
    <div class=\"article-image\">
        <img src=\"{{ file_url(article_image_file.uri.value) }}\" alt=\"{{ article_image_file.alt }}\">
    </div>
{% endif %}
{# END OF Image Section #}

{# START OF Info Section #}
{% if paragraph.field_article_page.entity %}
    <div class=\"article-info\">
        <h3 class=\"article-title\">{{ paragraph.field_article_page.entity.label }}</h3>
        <p class=\"article-summary\">{{ paragraph.field_article_page.entity.body.summary }}</p>
                    <a href=\"{{ url('entity.node.canonical', { 'node': paragraph.field_article_page.entity.id }) }}\">{{ 'Read More' }}</a>
                </div>
{% endif %}
{# END OF Info Section #}", "themes/contrib/bootstrap/templates/components/article-card/paragraph--article-card.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/components/article-card/paragraph--article-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5);
        static $filters = array("escape" => 7);
        static $functions = array("file_url" => 7, "url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['file_url', 'url']
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
