

<div class="relative transition-all video-container" onmouseenter="handleMouseEnter()" onmouseleave="handleMouseLeave()">
    <video id="video" src="{{ asset('storage/' . $home->video ) }}" class="rounded-3xl lg:min-w-full lg:max-h-[450px]"></video>
    <div id="playButton" class="rounded-full text-white absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 cursor-pointer bg-green-600 play-button" onclick="handlePlayedButton()">
        <i class="fas fa-play text-4xl p-3"></i>
    </div>
    <div id="pauseButton" class="rounded-full text-white absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 cursor-pointer bg-green-600 pause-button" onclick="handlePlayedButton()">
        <i class="fas fa-pause text-4xl py-3 px-5"></i>
    </div>
</div>

<script>
    let isPlayed = false;
    const video = document.getElementById('video');
    const playButton = document.getElementById('playButton');
    const pauseButton = document.getElementById('pauseButton');

    const handleMouseEnter = () => {
        if (!isPlayed) {
            playButton.style.display = 'block';
        } else {
            pauseButton.style.display = 'block';
        }
    }

    const handleMouseLeave = () => {
        playButton.style.display = 'none';
        pauseButton.style.display = 'none';
    }

    const handlePlayedButton = () => {
        if (isPlayed) {
            video.pause();
            playButton.style.display = 'block';
            pauseButton.style.display = 'none';
        } else {
            video.play();
            playButton.style.display = 'none';
            pauseButton.style.display = 'block';
        }
        isPlayed = !isPlayed;
    }

</script>