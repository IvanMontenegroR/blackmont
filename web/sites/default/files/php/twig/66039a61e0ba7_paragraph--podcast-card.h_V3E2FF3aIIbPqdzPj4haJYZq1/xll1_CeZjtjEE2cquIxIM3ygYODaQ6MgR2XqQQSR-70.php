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

/* themes/contrib/bootstrap/templates/components/podcast-card/paragraph--podcast-card.html.twig */
class __TwigTemplate_b6b1c2bc7aeed6ed8f753437898c2f29 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap/podcast-card"), "html", null, true);
        echo "
<article class=\"podcast-card\">

  ";
        // line 6
        echo "  <div class=\"podcast-image\">
    
    ";
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 9), "entity", [], "any", false, false, true, 9), "field_episode_image", [], "any", false, false, true, 9)) {
            // line 10
            echo "      
      ";
            // line 12
            echo "      ";
            $context["podcast_image_file"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "field_episode_image", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12);
            // line 13
            echo "      
      ";
            // line 15
            echo "      <div class=\"image-overlay-container\">
        <img src=\"";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["podcast_image_file"] ?? null), "uri", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["podcast_image_file"] ?? null), "alt", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\">
        <div class=\"overlay\"></div>
        
        ";
            // line 20
            echo "        <div class=\"card-banner-icon play-pause-btn\">
          <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
            <polygon points=\"8,5 19,12 8,19 8,5\" fill=\"white\"/>
          </svg>
        </div>
      
      </div>
    ";
        }
        // line 28
        echo "  </div>
  ";
        // line 30
        echo "  


  ";
        // line 34
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "field_podcast_audio", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34)) {
            // line 35
            echo "      <audio class=\"podcast-audio\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 35), "entity", [], "any", false, false, true, 35), "field_podcast_audio", [], "any", false, false, true, 35), "entity", [], "any", false, false, true, 35), "uri", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), 35, $this->source)), "html", null, true);
            echo "\" preload=\"metadata\"></audio>
    ";
        }
        // line 37
        echo "  ";
        // line 38
        echo "


  ";
        // line 42
        echo "    <div class=\"audio-controls\">
      <span class=\"current-time\">0:00</span>
      <input type=\"range\" class=\"audio-slider\" value=\"0\" min=\"0\" max=\"100\" step=\"1\">
      <span class=\"total-time\">0:00</span>
    </div>
  ";
        // line 48
        echo "


  ";
        // line 52
        echo "  <div class=\"podcast-info\">
    
    ";
        // line 55
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 55), "entity", [], "any", false, false, true, 55)) {
            // line 56
            echo "      
      <div class=\"info-row\">
        ";
            // line 59
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 59), "entity", [], "any", false, false, true, 59), "field_series", [], "any", false, false, true, 59), "entity", [], "any", false, false, true, 59)) {
                // line 60
                echo "          
          <div class=\"series-name\">
            <a href=\"";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.taxonomy_term.canonical", ["taxonomy_term" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 62), "entity", [], "any", false, false, true, 62), "field_series", [], "any", false, false, true, 62), "entity", [], "any", false, false, true, 62), "id", [], "any", false, false, true, 62)]), "html", null, true);
                echo "\" class=\"series-link\">
              ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 63), "entity", [], "any", false, false, true, 63), "field_series", [], "any", false, false, true, 63), "entity", [], "any", false, false, true, 63), "label", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "
            </a>
          </div>

        ";
            }
            // line 68
            echo "        <span class=\"episode-number\">Episode: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "field_episode_number", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</span>
      </div>

      <h3 class=\"episode-title\">";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 71), "entity", [], "any", false, false, true, 71), "label", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "</h3>

    ";
        }
        // line 74
        echo "  </div>
  ";
        // line 76
        echo "
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/components/podcast-card/paragraph--podcast-card.html.twig";
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
        return array (  164 => 76,  161 => 74,  155 => 71,  148 => 68,  140 => 63,  136 => 62,  132 => 60,  129 => 59,  125 => 56,  122 => 55,  118 => 52,  113 => 48,  106 => 42,  101 => 38,  99 => 37,  93 => 35,  90 => 34,  85 => 30,  82 => 28,  72 => 20,  64 => 16,  61 => 15,  58 => 13,  55 => 12,  52 => 10,  49 => 9,  45 => 6,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# paragraph--podcast-card.html.twig #}
{{ attach_library('bootstrap/podcast-card') }}
<article class=\"podcast-card\">

  {# START OF Section for the podcast image, including the overlay and play/pause button #}
  <div class=\"podcast-image\">
    
    {# Check if there is an episode image #}
    {% if paragraph.field_podcast_episode.entity.field_episode_image %}
      
      {# Access the image file #}
      {% set podcast_image_file = paragraph.field_podcast_episode.entity.field_episode_image.entity %}
      
      {# Container for the image and overlay #}
      <div class=\"image-overlay-container\">
        <img src=\"{{ file_url(podcast_image_file.uri.value) }}\" alt=\"{{ podcast_image_file.alt }}\">
        <div class=\"overlay\"></div>
        
        {# Play/pause button #}
        <div class=\"card-banner-icon play-pause-btn\">
          <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
            <polygon points=\"8,5 19,12 8,19 8,5\" fill=\"white\"/>
          </svg>
        </div>
      
      </div>
    {% endif %}
  </div>
  {# END OF SECTION #}
  


  {# START OF Audio file section #}
    {% if paragraph.field_podcast_episode.entity.field_podcast_audio.entity %}
      <audio class=\"podcast-audio\" src=\"{{ file_url(paragraph.field_podcast_episode.entity.field_podcast_audio.entity.uri.value) }}\" preload=\"metadata\"></audio>
    {% endif %}
  {# END OF SECTION #}



  {# START OF Audio controls located directly under the podcast image #}
    <div class=\"audio-controls\">
      <span class=\"current-time\">0:00</span>
      <input type=\"range\" class=\"audio-slider\" value=\"0\" min=\"0\" max=\"100\" step=\"1\">
      <span class=\"total-time\">0:00</span>
    </div>
  {# END OF SECTION #}



  {# START OF Section for podcast information like series name, episode number, and title #}
  <div class=\"podcast-info\">
    
    {# Check if there is episode information available #}
    {% if paragraph.field_podcast_episode.entity %}
      
      <div class=\"info-row\">
        {# Check for series name and provide a link if available #}
        {% if paragraph.field_podcast_episode.entity.field_series.entity %}
          
          <div class=\"series-name\">
            <a href=\"{{ path('entity.taxonomy_term.canonical', {'taxonomy_term': paragraph.field_podcast_episode.entity.field_series.entity.id}) }}\" class=\"series-link\">
              {{ paragraph.field_podcast_episode.entity.field_series.entity.label }}
            </a>
          </div>

        {% endif %}
        <span class=\"episode-number\">Episode: {{ paragraph.field_podcast_episode.entity.field_episode_number.value }}</span>
      </div>

      <h3 class=\"episode-title\">{{ paragraph.field_podcast_episode.entity.label }}</h3>

    {% endif %}
  </div>
  {# END OF SECTION #}

</article>
{# END OF CONTAINER #}", "themes/contrib/bootstrap/templates/components/podcast-card/paragraph--podcast-card.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/components/podcast-card/paragraph--podcast-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "set" => 12);
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2, "file_url" => 16, "path" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['attach_library', 'file_url', 'path']
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
