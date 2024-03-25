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
        echo "<article class=\"podcast-card\">

  ";
        // line 5
        echo "  <div class=\"podcast-image\">
    
    ";
        // line 8
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 8), "entity", [], "any", false, false, true, 8), "field_episode_image", [], "any", false, false, true, 8)) {
            // line 9
            echo "      
      ";
            // line 11
            echo "      ";
            $context["podcast_image_file"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11), "field_episode_image", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11);
            // line 12
            echo "      
      ";
            // line 14
            echo "      <div class=\"image-overlay-container\">
        <img src=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["podcast_image_file"] ?? null), "uri", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["podcast_image_file"] ?? null), "alt", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" />
        <div class=\"overlay\"></div>
        
        ";
            // line 19
            echo "        <div class=\"card-banner-icon play-pause-btn\">
          <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" xmlns=\"http://www.w3.org/2000/svg\">
            <polygon points=\"8,5 19,12 8,19 8,5\" fill=\"white\"/>
          </svg>
        </div>
      
      </div>
    ";
        }
        // line 27
        echo "  </div>
  ";
        // line 29
        echo "  


  ";
        // line 33
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 33), "entity", [], "any", false, false, true, 33), "field_podcast_audio", [], "any", false, false, true, 33), "entity", [], "any", false, false, true, 33)) {
            // line 34
            echo "      <audio class=\"podcast-audio\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "field_podcast_audio", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34), "uri", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
            echo "\" preload=\"metadata\"></audio>
    ";
        }
        // line 36
        echo "  ";
        // line 37
        echo "


  ";
        // line 41
        echo "    <div class=\"audio-controls\">
      <span class=\"current-time\">0:00</span>
      <input type=\"range\" class=\"audio-slider\" value=\"0\" min=\"0\" max=\"100\" step=\"1\">
      <span class=\"total-time\">0:00</span>
    </div>
  ";
        // line 47
        echo "


  ";
        // line 51
        echo "  <div class=\"podcast-info\">
    
    ";
        // line 54
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 54), "entity", [], "any", false, false, true, 54)) {
            // line 55
            echo "      
      <div class=\"info-row\">
        ";
            // line 58
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58), "field_series", [], "any", false, false, true, 58), "entity", [], "any", false, false, true, 58)) {
                // line 59
                echo "          
          <div class=\"series-name\">
            <a href=\"";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.taxonomy_term.canonical", ["taxonomy_term" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 61), "entity", [], "any", false, false, true, 61), "field_series", [], "any", false, false, true, 61), "entity", [], "any", false, false, true, 61), "id", [], "any", false, false, true, 61)]), "html", null, true);
                echo "\" class=\"series-link\">
              ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 62), "entity", [], "any", false, false, true, 62), "field_series", [], "any", false, false, true, 62), "entity", [], "any", false, false, true, 62), "label", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "
            </a>
          </div>

        ";
            }
            // line 67
            echo "        <span class=\"episode-number\">Episode: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 67), "entity", [], "any", false, false, true, 67), "field_episode_number", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</span>
      </div>

      <h3 class=\"episode-title\">";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_podcast_episode", [], "any", false, false, true, 70), "entity", [], "any", false, false, true, 70), "label", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "</h3>

    ";
        }
        // line 73
        echo "  </div>
  ";
        // line 75
        echo "
</article>
";
        // line 78
        echo "



<style type=\"text/css\">
/* Styling for the main podcast card */
.podcast-card {
  
  align-items: stretch; /* Stretch items to match the card's width */
  max-width: 255px; /* Maximum card width */
  box-shadow: 0 4px 12px rgba(88,79,76,0.16); /* Shadow effect for depth */
}

/* Container for image and overlay */
.image-overlay-container {
  position: relative; /* Needed for absolute positioning of children */
}

/* Styles for the podcast image */
.podcast-image img {
  width: 100%; /* Full width of its container */
  height: auto; /* Maintain aspect ratio */
  object-fit: cover; /* Cover the container without stretching */
  display: block; /* Block display to remove bottom margin/line */
}

/* The overlay that appears on top of the podcast image */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
  z-index: 1; /* Above the image but below the icon */
}

/* Play/pause button styling */
.card-banner-icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent; /* No background */
  border: 2px solid white; /* White border */
  border-radius: 50%; /* Circular shape */
  cursor: pointer; /* Pointer cursor on hover */
  z-index: 2; /* Ensure it's above the overlay */
}

/* Podcast information section styling */
.podcast-info {
  padding: 1rem; /* Padding around the text */
}

/* Row containing series name and episode number */
.info-row {
  display: flex;
  align-items: center;
  justify-content: space-between; /* Space between series name and episode number */
  width: 100%;
  padding: 0.5rem 0 1rem; /* Padding top & bottom */
}

/* Play/pause button centering */
.play-pause-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Perfectly center */
  z-index: 2;
  border: none;
  background-color: #fff;
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
}


/* Hover effect for the card */
.podcast-card:hover .card-banner-icon {
  background: white;
  color: #e91c24; /* Example color, replace with your theme color */
}

/* Link styling within the series name */
.series-name a {
  color: #2b2b2b;
  text-decoration: none; /* Remove underline */
}

/* Styling for the series name */
.series-name {
  position: relative;
  border-bottom: 2px solid #e91c24; /* Red underline */
}

/* Episode number styling */
.episode-number {
  color: #2b2b2b;
  text-align: right; /* Align to the right */
}

/* Episode title styling */
.episode-title {
  color: #2b2b2b;
  margin-top: 0.5rem; /* Space between row and title */
  font-size: 2rem; /* Larger font size for emphasis */
}

/* Custom styling for the audio slider */
.audio-slider {
  -webkit-appearance: none; /* Reset default style */
  width: 100%; /* Full width */
  height: 2px; /* Slider thickness */
  background: #e91c24; /* Slider color */
  cursor: pointer; /* Pointer cursor */
}


.audio-controls {
  z-index: 1;
  display: flex;
  align-items: center;
  bottom: 0;
  width: 100%;
  box-sizing: border-box;
  background-color: rgba(0, 0, 0, 0.75);
}

.current-time, .total-time {
  color: #fff;
  padding: 0.6rem;
}
</style>


<script>
window.onload = function() {
  const podcastCards = document.querySelectorAll('.podcast-card');
  console.log(`Found \${podcastCards.length} podcast cards`); // Log the number of podcast cards

  let currentlyPlaying = null; // Keep track of the currently playing audio

  podcastCards.forEach((card, index) => {
    console.log(`Setting up podcast card \${index + 1}`); // Log the index of the current podcast card

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
    }

    // Set slider max value and update total time when metadata is loaded
    audio.addEventListener('loadedmetadata', function() {
      slider.max = audio.duration;
      const totalMinutes = Math.floor(audio.duration / 60);
      const totalSeconds = Math.floor(audio.duration % 60);
      totalTimeElement.textContent = `\${totalMinutes}:\${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
      currentTimeElement.textContent = '0:00';
    });

   // Play/pause toggle
    playButton.addEventListener('click', function() {
      console.log(`Play button clicked for podcast card \${index + 1}`); // Log when the play button is clicked
      if (audio.paused) {
        if (currentlyPlaying && currentlyPlaying !== audio) {
          currentlyPlaying.pause(); // Pause the currently playing audio
        }
        audio.play();
        currentlyPlaying = audio; // Update the currently playing audio
      } else {
        audio.pause();
        if (currentlyPlaying === audio) {
          currentlyPlaying = null; // Clear the currently playing audio
        }
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

    // Continuously check and update total time until it's loaded
    const intervalId = setInterval(function() {
      if (audio.duration > 0) {
        const totalMinutes = Math.floor(audio.duration / 60);
        const totalSeconds = Math.floor(audio.duration % 60);
        totalTimeElement.textContent = `\${totalMinutes}:\${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
        clearInterval(intervalId);
      }
    }, 100);
  });
};
</script>";
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
        return array (  166 => 78,  162 => 75,  159 => 73,  153 => 70,  146 => 67,  138 => 62,  134 => 61,  130 => 59,  127 => 58,  123 => 55,  120 => 54,  116 => 51,  111 => 47,  104 => 41,  99 => 37,  97 => 36,  91 => 34,  88 => 33,  83 => 29,  80 => 27,  70 => 19,  62 => 15,  59 => 14,  56 => 12,  53 => 11,  50 => 9,  47 => 8,  43 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# paragraph--podcast-card.html.twig #}
<article class=\"podcast-card\">

  {# START OF Section for the podcast image, including the overlay and play/pause button #}
  <div class=\"podcast-image\">
    
    {# Check if there is an episode image #}
    {% if paragraph.field_podcast_episode.entity.field_episode_image %}
      
      {# Access the image file #}
      {% set podcast_image_file = paragraph.field_podcast_episode.entity.field_episode_image.entity %}
      
      {# Container for the image and overlay #}
      <div class=\"image-overlay-container\">
        <img src=\"{{ file_url(podcast_image_file.uri.value) }}\" alt=\"{{ podcast_image_file.alt }}\" />
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
{# END OF CONTAINER #}




<style type=\"text/css\">
/* Styling for the main podcast card */
.podcast-card {
  
  align-items: stretch; /* Stretch items to match the card's width */
  max-width: 255px; /* Maximum card width */
  box-shadow: 0 4px 12px rgba(88,79,76,0.16); /* Shadow effect for depth */
}

/* Container for image and overlay */
.image-overlay-container {
  position: relative; /* Needed for absolute positioning of children */
}

/* Styles for the podcast image */
.podcast-image img {
  width: 100%; /* Full width of its container */
  height: auto; /* Maintain aspect ratio */
  object-fit: cover; /* Cover the container without stretching */
  display: block; /* Block display to remove bottom margin/line */
}

/* The overlay that appears on top of the podcast image */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
  z-index: 1; /* Above the image but below the icon */
}

/* Play/pause button styling */
.card-banner-icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent; /* No background */
  border: 2px solid white; /* White border */
  border-radius: 50%; /* Circular shape */
  cursor: pointer; /* Pointer cursor on hover */
  z-index: 2; /* Ensure it's above the overlay */
}

/* Podcast information section styling */
.podcast-info {
  padding: 1rem; /* Padding around the text */
}

/* Row containing series name and episode number */
.info-row {
  display: flex;
  align-items: center;
  justify-content: space-between; /* Space between series name and episode number */
  width: 100%;
  padding: 0.5rem 0 1rem; /* Padding top & bottom */
}

/* Play/pause button centering */
.play-pause-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Perfectly center */
  z-index: 2;
  border: none;
  background-color: #fff;
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
}


/* Hover effect for the card */
.podcast-card:hover .card-banner-icon {
  background: white;
  color: #e91c24; /* Example color, replace with your theme color */
}

/* Link styling within the series name */
.series-name a {
  color: #2b2b2b;
  text-decoration: none; /* Remove underline */
}

/* Styling for the series name */
.series-name {
  position: relative;
  border-bottom: 2px solid #e91c24; /* Red underline */
}

/* Episode number styling */
.episode-number {
  color: #2b2b2b;
  text-align: right; /* Align to the right */
}

/* Episode title styling */
.episode-title {
  color: #2b2b2b;
  margin-top: 0.5rem; /* Space between row and title */
  font-size: 2rem; /* Larger font size for emphasis */
}

/* Custom styling for the audio slider */
.audio-slider {
  -webkit-appearance: none; /* Reset default style */
  width: 100%; /* Full width */
  height: 2px; /* Slider thickness */
  background: #e91c24; /* Slider color */
  cursor: pointer; /* Pointer cursor */
}


.audio-controls {
  z-index: 1;
  display: flex;
  align-items: center;
  bottom: 0;
  width: 100%;
  box-sizing: border-box;
  background-color: rgba(0, 0, 0, 0.75);
}

.current-time, .total-time {
  color: #fff;
  padding: 0.6rem;
}
</style>


<script>
window.onload = function() {
  const podcastCards = document.querySelectorAll('.podcast-card');
  console.log(`Found \${podcastCards.length} podcast cards`); // Log the number of podcast cards

  let currentlyPlaying = null; // Keep track of the currently playing audio

  podcastCards.forEach((card, index) => {
    console.log(`Setting up podcast card \${index + 1}`); // Log the index of the current podcast card

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
    }

    // Set slider max value and update total time when metadata is loaded
    audio.addEventListener('loadedmetadata', function() {
      slider.max = audio.duration;
      const totalMinutes = Math.floor(audio.duration / 60);
      const totalSeconds = Math.floor(audio.duration % 60);
      totalTimeElement.textContent = `\${totalMinutes}:\${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
      currentTimeElement.textContent = '0:00';
    });

   // Play/pause toggle
    playButton.addEventListener('click', function() {
      console.log(`Play button clicked for podcast card \${index + 1}`); // Log when the play button is clicked
      if (audio.paused) {
        if (currentlyPlaying && currentlyPlaying !== audio) {
          currentlyPlaying.pause(); // Pause the currently playing audio
        }
        audio.play();
        currentlyPlaying = audio; // Update the currently playing audio
      } else {
        audio.pause();
        if (currentlyPlaying === audio) {
          currentlyPlaying = null; // Clear the currently playing audio
        }
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

    // Continuously check and update total time until it's loaded
    const intervalId = setInterval(function() {
      if (audio.duration > 0) {
        const totalMinutes = Math.floor(audio.duration / 60);
        const totalSeconds = Math.floor(audio.duration % 60);
        totalTimeElement.textContent = `\${totalMinutes}:\${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
        clearInterval(intervalId);
      }
    }, 100);
  });
};
</script>", "themes/contrib/bootstrap/templates/components/podcast-card/paragraph--podcast-card.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/components/podcast-card/paragraph--podcast-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "set" => 11);
        static $filters = array("escape" => 15);
        static $functions = array("file_url" => 15, "path" => 61);

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
