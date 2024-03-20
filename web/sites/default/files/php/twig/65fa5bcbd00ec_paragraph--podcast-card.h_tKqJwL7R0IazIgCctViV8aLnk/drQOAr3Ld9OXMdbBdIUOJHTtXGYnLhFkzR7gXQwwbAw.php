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

/* themes/contrib/bootstrap/templates/paragraph--podcast-card.html.twig */
class __TwigTemplate_b26fbc7271080974f4e62e70f8d3d010 extends Template
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
        echo "<article class=\"podcast-card\">
  <div class=\"podcast-image\">
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "field_episode_image", [], "any", false, false, true, 3)) {
            // line 4
            echo "      ";
            $context["podcast_image_file"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "field_episode_image", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4);
            // line 5
            echo "      <div class=\"image-overlay-container\">
        <img src=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["podcast_image_file"] ?? null), "uri", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["podcast_image_file"] ?? null), "alt", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" />
        <div class=\"overlay\"></div>
        <!-- Adjusted Play Button with Clickable Area -->
<div class=\"card-banner-icon play-pause-btn\"> <!-- Add 'play-pause-btn' class here -->
  <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
    <polygon points=\"8,5 19,12 8,19 8,5\" fill=\"white\"/>
  </svg>
</div>
    ";
        }
        // line 15
        echo "    
    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16), "field_podcast_audio", [], "any", false, false, true, 16), "entity", [], "any", false, false, true, 16)) {
            // line 17
            echo "    <audio class=\"podcast-audio\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 17), "entity", [], "any", false, false, true, 17), "field_podcast_audio", [], "any", false, false, true, 17), "entity", [], "any", false, false, true, 17), "uri", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source)), "html", null, true);
            echo "\" preload=\"none\"></audio>
    <div class=\"audio-controls\">
  <span class=\"current-time\">0:00</span>
  <input type=\"range\" class=\"audio-slider\" value=\"0\" min=\"0\" max=\"100\" step=\"1\">
  <span class=\"total-time\">0:00</span>
</div>
  ";
        }
        // line 24
        echo "</div>

  <div class=\"podcast-info\">
  ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 27), "entity", [], "any", false, false, true, 27)) {
            // line 28
            echo "    <div class=\"info-row\"> <!-- New div to group series name and episode number -->
      ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29), "field_series", [], "any", false, false, true, 29), "entity", [], "any", false, false, true, 29)) {
                // line 30
                echo "        <div class=\"series-name\">
          <a href=\"";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.taxonomy_term.canonical", ["taxonomy_term" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 31), "entity", [], "any", false, false, true, 31), "field_series", [], "any", false, false, true, 31), "entity", [], "any", false, false, true, 31), "id", [], "any", false, false, true, 31)]), "html", null, true);
                echo "\" class=\"series-link\">
            ";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "field_series", [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "label", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "
          </a>
        </div>
      ";
            }
            // line 36
            echo "      <span class=\"episode-number\">Episode: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 36), "entity", [], "any", false, false, true, 36), "field_episode_number", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</span>
    </div>
    <h3 class=\"episode-title\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "label", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</h3> <!-- Episode title remains outside the new div -->
  ";
        }
        // line 40
        echo "</div>

  </div>
</article>


<style type=\"text/css\">

.podcast-card {
  display: flex;
  flex-direction: column; /* Stack children vertically */
  align-items: stretch; /* Stretch children to match the card's width */
  max-width: 255px; /* Maximum width of the card */
  margin: 0 auto; /* Centers the card within its container */
  box-shadow: 0 4px 12px 0 rgba(88,79,76,0.16);
  position: relative;
}

.image-overlay-container {
  position: relative;
}

.podcast-image img {
  width: 100%;
  height: auto;
  object-fit: cover;
  display: block; /* Ensure the image doesn't have extra space below */
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5); /* Soft black overlay */
  z-index: 1; /* Ensure it's above the image but below the play button */
}

.card-banner-icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent; /* Starting background transparent */
  border: 2px solid var(--white); /* Assuming variable for white color */
  border-radius: 50%;
  cursor: pointer;
  z-index: 2; /* Above the overlay */
}

.podcast-info {
  padding: 1rem; /* Adjust padding */
}

.info-row {
  display: flex; /* Aligns children in a row */
  align-items: center; /* Vertically aligns children */
  justify-content: space-between; /* Puts maximum space between the children */
  width: 100%; /* Ensures the container spans the full width of its parent */
  padding: 0.5rem 0 1rem 0;
}


.play-pause-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Center the button */
  z-index: 2; /* Above the overlay */
  border: none;
  background-color: #fff; /* Change as needed */
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
}

/* Ensure the button is visually accessible */
.play-pause-btn:focus {
  outline: 2px solid #fff;
  outline-offset: 2px;
}

/* Add hover effect for the play button if needed */
.play-pause-btn:hover {
  background-color: #e0e0e0; /* Light grey, adjust as needed */
}

.podcast-card:hover .card-banner-icon {
  background: var(--white);
  color: var(--blue-ryb);
}

.series-name a{
  color: #2b2b2b;
  text-decoration: none;
}

.series-name {
  position: relative;
  border-bottom: 2px solid #e91c24;
}



.episode-number {
  color: #2b2b2b; /* Adjust color as needed */
  text-align: right;
}

.episode-title {
  color: #2b2b2b; /* Adjust color as needed */
  margin-top: 0.5rem; /* Provides spacing between the info row and episode title */
  font-size: 2rem;
}

.audio-slider {
  -webkit-appearance: none;
  width: calc(100% - 60px); /* Adjust width to make space for timers */
  margin: 0 5px; /* Space between timers and slider */
  height: 2px;
  background: #e91c24;
  cursor: pointer;
}

.audio-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  cursor: pointer;
}

.audio-slider::-moz-range-thumb {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  cursor: pointer;
}

.audio-controls {
  z-index: 1;
  display: flex;
  align-items: center;
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 0 10px 1rem 10px; /* Adjust padding to not overlap with timer */
  box-sizing: border-box;
  transition: opacity 0.5s ease; /* Smooth transition for opacity change */
  opacity: 0; /* Initially hidden */
}

.current-time, .total-time {
  color: #fff;
  font-size: 1rem;
}




</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.podcast-card').forEach(card => {
    const audio = card.querySelector('.podcast-audio');
    const playButton = card.querySelector('.play-pause-btn');
    const slider = card.querySelector('.audio-slider');
    const currentTimeElement = card.querySelector('.current-time');
    const totalTimeElement = card.querySelector('.total-time');
    const controls = card.querySelector('.audio-controls');

    // Function to update play button icon and slider visibility
    function updatePlayButton(isPlaying) {
      playButton.innerHTML = isPlaying
          ? '<svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"6\" y=\"4\" width=\"4\" height=\"16\"/><rect x=\"14\" y=\"4\" width=\"4\" height=\"16\"/></svg>' // Pause icon
          : '<svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polygon points=\"8,5 19,12 8,19 8,5\"/></svg>'; // Play icon
      controls.style.opacity = isPlaying ? '1' : '0'; // Show or hide controls
    }

    // Set slider max value and update total time when metadata is loaded
    audio.addEventListener('loadedmetadata', function() {
      slider.max = audio.duration;
      const totalMinutes = Math.floor(audio.duration / 60);
      const totalSeconds = Math.floor(audio.duration % 60);
      totalTimeElement.textContent = `\${totalMinutes}:\${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
    });

    // Play/pause toggle
    playButton.addEventListener('click', function() {
      if (audio.paused) {
        audio.play();
      } else {
        audio.pause();
      }
    });

    // Update play button icon based on audio state
    audio.addEventListener('play', () => updatePlayButton(true));
    audio.addEventListener('pause', () => updatePlayButton(false));
    audio.addEventListener('ended', () => updatePlayButton(false)); // Reset on end

    // Update slider as audio plays
    audio.addEventListener('timeupdate', function() {
      slider.value = audio.currentTime;
      const currentMinutes = Math.floor(audio.currentTime / 60);
      const currentSeconds = Math.floor(audio.currentTime % 60);
      currentTimeElement.textContent = `\${currentMinutes}:\${currentSeconds < 10 ? '0' + currentSeconds : currentSeconds}`;
    });

    // Seek in the audio when slider value changes
    slider.addEventListener('input', function() {
      audio.currentTime = slider.value;
    });
  });
});
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/paragraph--podcast-card.html.twig";
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
        return array (  118 => 40,  113 => 38,  107 => 36,  100 => 32,  96 => 31,  93 => 30,  91 => 29,  88 => 28,  86 => 27,  81 => 24,  70 => 17,  68 => 16,  65 => 15,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"podcast-card\">
  <div class=\"podcast-image\">
    {% if paragraph.field_podcast_episode.entity.field_episode_image %}
      {% set podcast_image_file = paragraph.field_podcast_episode.entity.field_episode_image.entity %}
      <div class=\"image-overlay-container\">
        <img src=\"{{ file_url(podcast_image_file.uri.value) }}\" alt=\"{{ podcast_image_file.alt }}\" />
        <div class=\"overlay\"></div>
        <!-- Adjusted Play Button with Clickable Area -->
<div class=\"card-banner-icon play-pause-btn\"> <!-- Add 'play-pause-btn' class here -->
  <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
    <polygon points=\"8,5 19,12 8,19 8,5\" fill=\"white\"/>
  </svg>
</div>
    {% endif %}
    
    {% if paragraph.field_podcast_episode.entity.field_podcast_audio.entity %}
    <audio class=\"podcast-audio\" src=\"{{ file_url(paragraph.field_podcast_episode.entity.field_podcast_audio.entity.uri.value) }}\" preload=\"none\"></audio>
    <div class=\"audio-controls\">
  <span class=\"current-time\">0:00</span>
  <input type=\"range\" class=\"audio-slider\" value=\"0\" min=\"0\" max=\"100\" step=\"1\">
  <span class=\"total-time\">0:00</span>
</div>
  {% endif %}
</div>

  <div class=\"podcast-info\">
  {% if paragraph.field_podcast_episode.entity %}
    <div class=\"info-row\"> <!-- New div to group series name and episode number -->
      {% if paragraph.field_podcast_episode.entity.field_series.entity %}
        <div class=\"series-name\">
          <a href=\"{{ path('entity.taxonomy_term.canonical', {'taxonomy_term': paragraph.field_podcast_episode.entity.field_series.entity.id}) }}\" class=\"series-link\">
            {{ paragraph.field_podcast_episode.entity.field_series.entity.label }}
          </a>
        </div>
      {% endif %}
      <span class=\"episode-number\">Episode: {{ paragraph.field_podcast_episode.entity.field_episode_number.value }}</span>
    </div>
    <h3 class=\"episode-title\">{{ paragraph.field_podcast_episode.entity.label }}</h3> <!-- Episode title remains outside the new div -->
  {% endif %}
</div>

  </div>
</article>


<style type=\"text/css\">

.podcast-card {
  display: flex;
  flex-direction: column; /* Stack children vertically */
  align-items: stretch; /* Stretch children to match the card's width */
  max-width: 255px; /* Maximum width of the card */
  margin: 0 auto; /* Centers the card within its container */
  box-shadow: 0 4px 12px 0 rgba(88,79,76,0.16);
  position: relative;
}

.image-overlay-container {
  position: relative;
}

.podcast-image img {
  width: 100%;
  height: auto;
  object-fit: cover;
  display: block; /* Ensure the image doesn't have extra space below */
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5); /* Soft black overlay */
  z-index: 1; /* Ensure it's above the image but below the play button */
}

.card-banner-icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent; /* Starting background transparent */
  border: 2px solid var(--white); /* Assuming variable for white color */
  border-radius: 50%;
  cursor: pointer;
  z-index: 2; /* Above the overlay */
}

.podcast-info {
  padding: 1rem; /* Adjust padding */
}

.info-row {
  display: flex; /* Aligns children in a row */
  align-items: center; /* Vertically aligns children */
  justify-content: space-between; /* Puts maximum space between the children */
  width: 100%; /* Ensures the container spans the full width of its parent */
  padding: 0.5rem 0 1rem 0;
}


.play-pause-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Center the button */
  z-index: 2; /* Above the overlay */
  border: none;
  background-color: #fff; /* Change as needed */
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
}

/* Ensure the button is visually accessible */
.play-pause-btn:focus {
  outline: 2px solid #fff;
  outline-offset: 2px;
}

/* Add hover effect for the play button if needed */
.play-pause-btn:hover {
  background-color: #e0e0e0; /* Light grey, adjust as needed */
}

.podcast-card:hover .card-banner-icon {
  background: var(--white);
  color: var(--blue-ryb);
}

.series-name a{
  color: #2b2b2b;
  text-decoration: none;
}

.series-name {
  position: relative;
  border-bottom: 2px solid #e91c24;
}



.episode-number {
  color: #2b2b2b; /* Adjust color as needed */
  text-align: right;
}

.episode-title {
  color: #2b2b2b; /* Adjust color as needed */
  margin-top: 0.5rem; /* Provides spacing between the info row and episode title */
  font-size: 2rem;
}

.audio-slider {
  -webkit-appearance: none;
  width: calc(100% - 60px); /* Adjust width to make space for timers */
  margin: 0 5px; /* Space between timers and slider */
  height: 2px;
  background: #e91c24;
  cursor: pointer;
}

.audio-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  cursor: pointer;
}

.audio-slider::-moz-range-thumb {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  cursor: pointer;
}

.audio-controls {
  z-index: 1;
  display: flex;
  align-items: center;
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 0 10px 1rem 10px; /* Adjust padding to not overlap with timer */
  box-sizing: border-box;
  transition: opacity 0.5s ease; /* Smooth transition for opacity change */
  opacity: 0; /* Initially hidden */
}

.current-time, .total-time {
  color: #fff;
  font-size: 1rem;
}




</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.podcast-card').forEach(card => {
    const audio = card.querySelector('.podcast-audio');
    const playButton = card.querySelector('.play-pause-btn');
    const slider = card.querySelector('.audio-slider');
    const currentTimeElement = card.querySelector('.current-time');
    const totalTimeElement = card.querySelector('.total-time');
    const controls = card.querySelector('.audio-controls');

    // Function to update play button icon and slider visibility
    function updatePlayButton(isPlaying) {
      playButton.innerHTML = isPlaying
          ? '<svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><rect x=\"6\" y=\"4\" width=\"4\" height=\"16\"/><rect x=\"14\" y=\"4\" width=\"4\" height=\"16\"/></svg>' // Pause icon
          : '<svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"><polygon points=\"8,5 19,12 8,19 8,5\"/></svg>'; // Play icon
      controls.style.opacity = isPlaying ? '1' : '0'; // Show or hide controls
    }

    // Set slider max value and update total time when metadata is loaded
    audio.addEventListener('loadedmetadata', function() {
      slider.max = audio.duration;
      const totalMinutes = Math.floor(audio.duration / 60);
      const totalSeconds = Math.floor(audio.duration % 60);
      totalTimeElement.textContent = `\${totalMinutes}:\${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
    });

    // Play/pause toggle
    playButton.addEventListener('click', function() {
      if (audio.paused) {
        audio.play();
      } else {
        audio.pause();
      }
    });

    // Update play button icon based on audio state
    audio.addEventListener('play', () => updatePlayButton(true));
    audio.addEventListener('pause', () => updatePlayButton(false));
    audio.addEventListener('ended', () => updatePlayButton(false)); // Reset on end

    // Update slider as audio plays
    audio.addEventListener('timeupdate', function() {
      slider.value = audio.currentTime;
      const currentMinutes = Math.floor(audio.currentTime / 60);
      const currentSeconds = Math.floor(audio.currentTime % 60);
      currentTimeElement.textContent = `\${currentMinutes}:\${currentSeconds < 10 ? '0' + currentSeconds : currentSeconds}`;
    });

    // Seek in the audio when slider value changes
    slider.addEventListener('input', function() {
      audio.currentTime = slider.value;
    });
  });
});
</script>
", "themes/contrib/bootstrap/templates/paragraph--podcast-card.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/paragraph--podcast-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 4);
        static $filters = array("escape" => 6);
        static $functions = array("file_url" => 6, "path" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['file_url', 'path']
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
