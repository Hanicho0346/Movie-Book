
function changeBg(bg, title,description) {
    const banner = document.querySelector('.banner');
    const contents = document.querySelectorAll('.content');
    const movieTitleElement = document.querySelector('.movie-title');
    const movieDescriptionElement = document.querySelector('.carousel-item p');

    const previouslyActiveContent = document.querySelector('.content.active');
    if (previouslyActiveContent) {
        previouslyActiveContent.classList.remove('active');
    }

    const selectedContent = document.querySelector(`.content.${title}`);
    selectedContent.classList.add('active');
    movieTitleElement.innerText = title;

    const carouselItems = document.querySelectorAll('.carousel-item');
    carouselItems.forEach((item, index) => {
        if (index === Array.from(contents).indexOf(selectedContent)) {
            item.classList.add('active');
            movieDescriptionElement.textContent = description;
        } else {
            item.classList.remove('active');
        }
    });
}

    document.addEventListener('DOMContentLoaded', function () {
        var trailerPlayer = document.querySelector('.trailer-player');
        var videoPlayer = document.querySelector('.video');
        var playButton = document.querySelector('.play');
        var closeButton = document.querySelector('.close-button');
    
        var contents = document.querySelectorAll('.content');
        var trailers = [
            'trailer/doka.mp4',
            'trailer/kiya.mp4',
            'trailer/kerbe.mp4',
            'trailer/taza.mp4',
            'trailer/rebuni.mp4',
            'trailer/adinas.mp4',
            'trailer/ensaro.mp4',
            'trailer/sumalew.mp4',
            'trailer/min-alesh.mp4'
        ];
    
        var currentTrailerIndex = 0;
    
        playButton.addEventListener('click', function () {
            switchTrailer();
        });
    
        closeButton.addEventListener('click', function () {
            closeTrailer();
        });
        function switchTrailer() {
            if (currentTrailerIndex < trailers.length) {
                var selectedContentIndex = Array.from(contents).indexOf(document.querySelector('.content.active'));
                if (currentTrailerIndex === selectedContentIndex) {
                    videoPlayer.src = trailers[currentTrailerIndex];
                    trailerPlayer.style.display = 'flex';
                    videoPlayer.load();
                    videoPlayer.play();
                    updateContent(currentTrailerIndex);
                    currentTrailerIndex++;
                } else {
                    console.error('Content index does not match trailer index');
                }
            } else {
                currentTrailerIndex = 0;
                videoPlayer.src = '';
                trailerPlayer.style.display = 'none';
            }
        }
        
    
        function updateContent(index) {
            contents.forEach(function (content, i) {
                if (i === index) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });
        }
    
        function closeTrailer() {
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
            trailerPlayer.style.display = 'none';
        }
    });
    