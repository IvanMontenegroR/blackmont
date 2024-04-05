// When the window is fully loaded, execute the function
window.onload = function() {
  // Select all elements with the class 'podcast-card' and store them in the variable 'podcastCards'
  const podcastCards = document.querySelectorAll('.podcast-card');

  // Declare a variable to keep track of the currently playing audio, initially set to null
  let currentlyPlaying = null;

  // For each podcast card, execute the following function
  podcastCards.forEach((card) => {

    // Select and store various elements within the current podcast card
    const audio = card.querySelector('.podcast-audio');
    const playButton = card.querySelector('.play-pause-btn');
    const slider = card.querySelector('.audio-slider');
    const currentTimeElement = card.querySelector('.current-time');
    const totalTimeElement = card.querySelector('.total-time');

    slider.max = audio.duration;

    // Define a function to update the play button's icon and the slider's visibility
    function updatePlayButton(isPlaying) {
      // If the audio is playing, set the button to display a pause icon, otherwise, display a play icon
      playButton.innerHTML = isPlaying
          ? '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>' // Pause icon
          : '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="8,5 19,12 8,19 8,5"/></svg>'; // Play icon
    }
    

    // When the audio's metadata is loaded, execute the following function
    audio.addEventListener('loadedmetadata', function() {
      // Calculate the total minutes and seconds of the audio's duration
      const totalMinutes = Math.floor(audio.duration / 60);
      const totalSeconds = Math.floor(audio.duration % 60);
      // Display the total time in the total time element
      totalTimeElement.textContent = `${totalMinutes}:${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
      // Set the current time display to '0:00'
      currentTimeElement.textContent = '0:00';
    });


    // When the play button is clicked, execute the following function
    playButton.addEventListener('click', function() {
      // If the audio is paused, play it
      if (audio.paused) {
        // If there is a currently playing audio and it's not the current audio, pause it
        if (currentlyPlaying && currentlyPlaying !== audio) {
          currentlyPlaying.pause();
        }
        // Play the audio
        audio.play();
        // Update the currently playing audio
        currentlyPlaying = audio;
      } else {
        // If the audio is playing, pause it
        audio.pause();
        // If the currently playing audio is the current audio, clear the currently playing audio
        if (currentlyPlaying === audio) {
          currentlyPlaying = null;
        }
      }
    });


    // When the user moves the slider, the audio should follow
    slider.addEventListener('input', function() {
      // Store the playing state of the audio
        const wasPlaying = !audio.paused;
      // Set the current time of the audio to the slider's value
        audio.currentTime = slider.value;
      // If the audio was playing, play it again
        if (wasPlaying) {
        audio.play();
        }
      });


    // When the audio starts playing, update the play button
    audio.addEventListener('play', () => updatePlayButton(true));
    // When the audio is paused, update the play button
    audio.addEventListener('pause', () => updatePlayButton(false));
    // When the audio ends, reset the play button
    audio.addEventListener('ended', () => updatePlayButton(false));


    // As the audio plays, update the slider and the current time display (passive without user input)
    audio.addEventListener('timeupdate', function() {
      // Update the slider's value to the current time of the audio
      slider.value = audio.currentTime;
      // Calculate the current minutes and seconds of the audio
      const currentMinutes = Math.floor(audio.currentTime / 60);
      const currentSeconds = Math.floor(audio.currentTime % 60);
      // Display the current time in the current time element
      currentTimeElement.textContent = `${currentMinutes}:${currentSeconds < 10 ? '0' + currentSeconds : currentSeconds}`;
    });

    
    // Continuously check and update the total time until it's loaded
    const intervalId = setInterval(function() {
      // If the audio's duration is more than 0, update the total time display and clear the interval
      if (audio.duration > 0) {
        // Calculate the total minutes and seconds of the audio's duration
        const totalMinutes = Math.floor(audio.duration / 60);
        const totalSeconds = Math.floor(audio.duration % 60);
        // Display the total time in the total time element
        totalTimeElement.textContent = `${totalMinutes}:${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`;
        // Clear the interval
        clearInterval(intervalId);
      }
    }, 100); // The interval runs every 100 milliseconds
  });
};