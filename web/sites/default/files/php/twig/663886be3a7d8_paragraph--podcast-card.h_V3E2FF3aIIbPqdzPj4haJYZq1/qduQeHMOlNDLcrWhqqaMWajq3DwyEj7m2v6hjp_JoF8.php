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
<article class=\"podcast-card\" data-episode-title=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "label", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\">

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
        
      
      </div>
    ";
        }
        // line 22
        echo "  </div>
  ";
        // line 24
        echo "  


  ";
        // line 28
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "field_podcast_audio", [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28)) {
            // line 29
            echo "      <audio class=\"podcast-audio\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "field_podcast_audio", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "uri", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source)), "html", null, true);
            echo "\" preload=\"metadata\"></audio>
    ";
        }
        // line 31
        echo "  ";
        // line 32
        echo "


  ";
        // line 36
        echo "  <div class=\"audio-controls\">
        <span class=\"current-time\">0:00</span>
        <input type=\"range\" class=\"audio-slider\" value=\"0\" min=\"0\" max=\"100\" step=\"1\">
        <span class=\"total-time\">0:00</span>
        
        <!-- Playback Speed Selector -->
  <button id=\"speed-toggle\" class=\"speed-toggle\">1x</button>
        
        <button id=\"download-button\" class=\"download-button\">
  <svg width=\"20\" height=\"36\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
    <g>
      <!-- Download Arrow -->
      <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"16\" stroke-width=\"2\"/>
      <polyline points=\"7 12 12 17 17 12\" stroke-width=\"2\"/>
      <!-- Download Bar -->
      <line x1=\"5\" y1=\"21\" x2=\"19\" y2=\"21\" stroke-width=\"2\"/>
    </g>
  </svg>
</button>
    </div>


    <div class=\"action-buttons\">
      <button class=\"backward\"><svg width=\"74\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" class=\"playback-speed playback-speed-2-0x\">
    <!-- Grouping arrows and applying transformations -->
    <g transform=\"scale(-1, 1) translate(-24, 0)\">
        <!-- Remaining first arrow for 2.0x, flipped -->
        <polyline points=\"4 9 7 12 4 15\" stroke-width=\"2\"/>
    </g>
    <!-- Adding the text '10' to the right side of the arrow, smaller size to prevent overlapping -->
    <text x=\"21\" y=\"15\" font-family=\"Arial\" font-size=\"8\" fill=\"currentColor\">10</text>
</svg></button>


    <button class=\"play-pause-btn\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
            <polygon points=\"8,5 19,12 8,19 8,5\" fill=\"white\"/>
        </svg>
      </button>


      <button class=\"forward\"><svg width=\"74\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" class=\"playback-speed playback-speed-2-0x\">
    <!-- Adding the text '10' to the left side of the arrow -->
    <text x=\"-6.5\" y=\"15\" font-family=\"Arial\" font-size=\"8\" fill=\"currentColor\">10</text>
    <!-- Arrow flipped to point to the right -->
    <polyline points=\"4 9 7 12 4 15\" stroke-width=\"2\"/>
</svg></button>
</div>
  ";
        // line 85
        echo "


  ";
        // line 89
        echo "  <div class=\"podcast-info\">
    
    ";
        // line 92
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 92), "entity", [], "any", false, false, true, 92)) {
            // line 93
            echo "      
      <div class=\"info-row\">
        ";
            // line 96
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 96), "entity", [], "any", false, false, true, 96), "field_series", [], "any", false, false, true, 96), "entity", [], "any", false, false, true, 96)) {
                // line 97
                echo "          
          <div class=\"series-name\">
            <a href=\"";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.taxonomy_term.canonical", ["taxonomy_term" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 99), "entity", [], "any", false, false, true, 99), "field_series", [], "any", false, false, true, 99), "entity", [], "any", false, false, true, 99), "id", [], "any", false, false, true, 99)]), "html", null, true);
                echo "\" class=\"series-link\">
              ";
                // line 100
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 100), "entity", [], "any", false, false, true, 100), "field_series", [], "any", false, false, true, 100), "entity", [], "any", false, false, true, 100), "label", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "
            </a>
          </div>

        ";
            }
            // line 105
            echo "        <span class=\"episode-number\">Episode: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 105), "entity", [], "any", false, false, true, 105), "field_episode_number", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "</span>
      </div>

      <h3 class=\"episode-title\">";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 108), "entity", [], "any", false, false, true, 108), "label", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</h3>

    ";
        }
        // line 111
        echo "  </div>
  ";
        // line 113
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
        return array (  203 => 113,  200 => 111,  194 => 108,  187 => 105,  179 => 100,  175 => 99,  171 => 97,  168 => 96,  164 => 93,  161 => 92,  157 => 89,  152 => 85,  102 => 36,  97 => 32,  95 => 31,  89 => 29,  86 => 28,  81 => 24,  78 => 22,  67 => 16,  64 => 15,  61 => 13,  58 => 12,  55 => 10,  52 => 9,  48 => 6,  43 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# paragraph--podcast-card.html.twig #}
{{ attach_library('bootstrap/podcast-card') }}
<article class=\"podcast-card\" data-episode-title=\"{{ paragraph.field_podcast_episode.entity.label }}\">

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
        
      
      </div>
    {% endif %}
  </div>
  {# END OF SECTION #}
  


  {# START OF Audio file section #}
    {% if paragraph.field_podcast_episode.entity.field_podcast_audio.entity %}
      <audio class=\"podcast-audio\" src=\"{{ file_url(paragraph.field_podcast_episode.entity.field_podcast_audio.entity.uri.value) }}\" preload=\"metadata\"></audio>
    {% endif %}
  {# END OF SECTION #}



  {# START OF Audio controls #}
  <div class=\"audio-controls\">
        <span class=\"current-time\">0:00</span>
        <input type=\"range\" class=\"audio-slider\" value=\"0\" min=\"0\" max=\"100\" step=\"1\">
        <span class=\"total-time\">0:00</span>
        
        <!-- Playback Speed Selector -->
  <button id=\"speed-toggle\" class=\"speed-toggle\">1x</button>
        
        <button id=\"download-button\" class=\"download-button\">
  <svg width=\"20\" height=\"36\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
    <g>
      <!-- Download Arrow -->
      <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"16\" stroke-width=\"2\"/>
      <polyline points=\"7 12 12 17 17 12\" stroke-width=\"2\"/>
      <!-- Download Bar -->
      <line x1=\"5\" y1=\"21\" x2=\"19\" y2=\"21\" stroke-width=\"2\"/>
    </g>
  </svg>
</button>
    </div>


    <div class=\"action-buttons\">
      <button class=\"backward\"><svg width=\"74\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" class=\"playback-speed playback-speed-2-0x\">
    <!-- Grouping arrows and applying transformations -->
    <g transform=\"scale(-1, 1) translate(-24, 0)\">
        <!-- Remaining first arrow for 2.0x, flipped -->
        <polyline points=\"4 9 7 12 4 15\" stroke-width=\"2\"/>
    </g>
    <!-- Adding the text '10' to the right side of the arrow, smaller size to prevent overlapping -->
    <text x=\"21\" y=\"15\" font-family=\"Arial\" font-size=\"8\" fill=\"currentColor\">10</text>
</svg></button>


    <button class=\"play-pause-btn\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
            <polygon points=\"8,5 19,12 8,19 8,5\" fill=\"white\"/>
        </svg>
      </button>


      <button class=\"forward\"><svg width=\"74\" height=\"48\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" class=\"playback-speed playback-speed-2-0x\">
    <!-- Adding the text '10' to the left side of the arrow -->
    <text x=\"-6.5\" y=\"15\" font-family=\"Arial\" font-size=\"8\" fill=\"currentColor\">10</text>
    <!-- Arrow flipped to point to the right -->
    <polyline points=\"4 9 7 12 4 15\" stroke-width=\"2\"/>
</svg></button>
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
        static $functions = array("attach_library" => 2, "file_url" => 16, "path" => 99);

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
