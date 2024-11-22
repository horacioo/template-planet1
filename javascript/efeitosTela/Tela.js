document.addEventListener("DOMContentLoaded", function() {
    const openDiv = document.querySelector('.open');

    openDiv.addEventListener('click', function() {
        if (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement) {
            // Sai do modo tela cheia
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) { // Suporte para Firefox
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) { // Suporte para Chrome, Safari e Opera
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) { // Suporte para IE/Edge
                document.msExitFullscreen();
            }
        } else {
            // Entra no modo tela cheia
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) { // Suporte para Firefox
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) { // Suporte para Chrome, Safari e Opera
                document.documentElement.webkitRequestFullscreen();
            } else if (document.documentElement.msRequestFullscreen) { // Suporte para IE/Edge
                document.documentElement.msRequestFullscreen();
            }
        }
    });
});