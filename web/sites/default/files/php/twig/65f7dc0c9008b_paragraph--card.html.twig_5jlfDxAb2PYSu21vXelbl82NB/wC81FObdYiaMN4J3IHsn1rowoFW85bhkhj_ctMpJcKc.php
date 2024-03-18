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

/* themes/contrib/bootstrap/templates/paragraph--card.html.twig */
class __TwigTemplate_1876ecd9363e4bb502d70be1003cbb73 extends Template
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
        echo "<div class=\"card\">
    <div class=\"card-image\">
      ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 3)) {
            // line 4
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 6
        echo "    </div>
    <div class=\"card-content\">
      <h3 class=\"card-title\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</h3>
      <p class=\"card-text\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
      ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta", [], "any", false, false, true, 10)) {
            // line 11
            echo "        ";
            $context["cta_url"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null);
            // line 12
            echo "        ";
            $context["cta_title"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null);
            // line 13
            echo "        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cta_url"] ?? null), 13, $this->source), "html", null, true);
            echo "\" class=\"card-button\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cta_title"] ?? null), 13, $this->source), "html", null, true);
            echo "</a>
      ";
        }
        // line 15
        echo "    </div>
  </div>
  




<style type=\"text/css\">
/* Card Container */
.card {
  display: flex;
  align-items: center; /* Vertically centers the card content inside */
  width: 75%; /* Adjust if needed */
  margin: 0 auto; /* Centers the card within its parent */
  border: 1px solid rgba(0, 0, 0, .125);
  border-radius: .25rem;
}

.card-image {
  flex: 1; /* Adjusts based on your image's desired width */
  /* Ensures the image stretches to the left border */
  margin-right: 2rem; /* Adds some space between the image and the text */
}

.card-content {
  flex: 2; /* Adjusts based on your content's desired width */
  padding: 2rem 0; /* Vertical padding only */
}
  
  /* Card Button */
  .card-button {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    display: inline-block;
    padding: .375rem .75rem;
    font-size: 1.125rem;
    line-height: 1.5;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: .25rem;
    text-decoration: none; /* Remove underline from links */
  }
  
  .card-button:hover {
    background-color: #fff;
    border-color: #0056b3;
  }
  
</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/paragraph--card.html.twig";
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
        return array (  79 => 15,  71 => 13,  68 => 12,  65 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-image\">
      {% if content.field_image %}
        {{ content.field_image }}
      {% endif %}
    </div>
    <div class=\"card-content\">
      <h3 class=\"card-title\">{{ content.field_title }}</h3>
      <p class=\"card-text\">{{ content.field_description }}</p>
      {% if content.field_cta %}
        {% set cta_url = content.field_cta.0['#url'] %}
        {% set cta_title = content.field_cta.0['#title'] %}
        <a href=\"{{ cta_url }}\" class=\"card-button\">{{ cta_title }}</a>
      {% endif %}
    </div>
  </div>
  




<style type=\"text/css\">
/* Card Container */
.card {
  display: flex;
  align-items: center; /* Vertically centers the card content inside */
  width: 75%; /* Adjust if needed */
  margin: 0 auto; /* Centers the card within its parent */
  border: 1px solid rgba(0, 0, 0, .125);
  border-radius: .25rem;
}

.card-image {
  flex: 1; /* Adjusts based on your image's desired width */
  /* Ensures the image stretches to the left border */
  margin-right: 2rem; /* Adds some space between the image and the text */
}

.card-content {
  flex: 2; /* Adjusts based on your content's desired width */
  padding: 2rem 0; /* Vertical padding only */
}
  
  /* Card Button */
  .card-button {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    display: inline-block;
    padding: .375rem .75rem;
    font-size: 1.125rem;
    line-height: 1.5;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: .25rem;
    text-decoration: none; /* Remove underline from links */
  }
  
  .card-button:hover {
    background-color: #fff;
    border-color: #0056b3;
  }
  
</style>", "themes/contrib/bootstrap/templates/paragraph--card.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/paragraph--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 11);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
