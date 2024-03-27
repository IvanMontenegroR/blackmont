window.onload = function() {
    const podcastCards = document.querySelectorAll('.podcast-card');
    console.log(`Found ${podcastCards.length} podcast cards`); // Log the number of podcast cards
  
    let currentlyPlaying = null; // Keep track of the currently playing audio
  
    podcastCards.forEach((card, index) => {
      console.log(`Setting up podcast card ${index + 1}`); // Log the index of the current podcast card
  
      const audio = card.querySelector('.podcast-audio');
      const playButton = card.querySelector('.play-pause-btn');
      const slider = card.querySelector('.audio-slider');
      const currentTimeElement = card.querySelector('.current-time');
      const totalTimeElement = card.querySelector('.total-time');
      const controls = card.querySelector('.audio-controls');
  
      // Function to update play button icon and slider visibility
      function updatePlayButton(isPlaying) {
        playButton.innerHTML = isPlaying
            ? '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>' // Pause icon
            : '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="8,5 19,12 8,19 8,5"/></svg>'; // Play icon
      }
  
      // Set slider max value and update total time when metadata is loaded
      audio.addEventListener('loadedmetadata', function() {
        slider.max = audio.duration;
        const totalMinutes = Math.floor(audio.duration / 60);
        const totalSeconds = Math.floor(audio.duration % 60);
        totalTimeElement.textContent = `${totalMinutes}:${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
        currentTimeElement.textContent = '0:00';
      });
  
     // Play/pause toggle
      playButton.addEventListener('click', function() {
        console.log(`Play button clicked for podcast card ${index + 1}`); // Log when the play button is clicked
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
        currentTimeElement.textContent = `${currentMinutes}:${currentSeconds < 10 ? '0' + currentSeconds : currentSeconds}`;
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
          totalTimeElement.textContent = `${totalMinutes}:${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
          clearInterval(intervalId);
        }
      }, 100);
    });
  };